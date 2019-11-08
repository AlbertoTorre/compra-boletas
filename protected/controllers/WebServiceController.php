<?php

class WebServiceController extends Controller
{
	public function downloadFile($path)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$path);
		curl_setopt($ch, CURLOPT_FAILONERROR,1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		$response = curl_exec($ch);          
		curl_close($ch);
		return $response;
	}

	public function actionIndex()
	{	
		$stringXML = $this->downloadFile('http://190.248.130.234/xml2/variable2.xml');
		$resultXML = new SimpleXMLElement($stringXML);

		$model = new WsResponse;
		$model->unsetAttributes();
		$qty = 0;
		foreach ( $resultXML as $movie ) {
			
			foreach ( $movie->cinemas->cinema as $cinema ) {

				foreach ( $cinema->salas->sala as $sala ) {

					foreach ( $sala->Fecha->hora as $hora ) {
						
						$isExit = WsResponse::model()->find( array(
							'condition'	=> 'function_id =  :functionId AND pelicula_id =  :peliculaId AND cinema_id   =  :cinemaId AND fecha       =  :fecha AND fecha       =  :fecha AND horario     =  :horario AND numero_sala =  :numeroSala',
							'params'=> array(
								":functionId" => (string) $hora['idFuncion'],
								":peliculaId" => (string) $movie['id'],
								":cinemaId"   => (string) $cinema['id'],
								":fecha"       => (string) $sala->Fecha['univ'],
								":horario"     => (string) $hora['horario'],
								":numeroSala" => (int) $sala['numeroSala'],
								":tipo_sala"   => (string) $sala['TipoSala']
							),
						));

						if ( $isExit !== null ) {

							$model->setIsNewRecord(true);
							$model->id = null;
							$model->function_id = (string) $hora['idFuncion'];
							$model->pelicula_id = (string) $movie['id'];
							$model->cinema_id   = (string) $cinema['id'];
							$model->fecha       = (string) $sala->Fecha['univ'];
							$model->horario     = (string) $hora['horario'];
							$model->numero_sala = (int) $sala['numeroSala'];
							$model->tipo_sala   = (string) $sala['TipoSala'];
							if ( $model->save() ) {

								$qty++;
							}
						}
					}
				}
			}
		}

		$this->render('index', array('qtyInsert'=> $qty , 'movies'=> $resultXML ) );
	}


}