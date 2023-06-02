<?php
    require_once("./inc/entities/Test.class.php");


    function readCustonFile( $file ){
        try{

            $fileHandler = fopen( $file, "r" );

            if( !$fileHandler ){
                throw new Exeption("Cant read the file: $file");
            }

            $fileContent =  fread( $fileHandler , filesize($file));
        
            fclose($fileHandler);

        }catch( Exeption $error ){

            echo $error->getMessage();
        }

        return $fileContent;

    }

    function toArray( $string ){
        try{
            if(!is_string($string)){
                throw new Exeption("the content isnt a string, cant convert");
            }

            $gamesList = array();

            $fileRow = explode( "\n" , $string );
            for($i = 1 ; $i<count($fileRow)-1 ; $i++ ){

                $gameData = explode( "," , $fileRow[$i] );
                $tempGame = new GameTest(
                    $gameData[0],
                    $gameData[1],
                    $gameData[2],
                    $gameData[3],
                    $gameData[4]
                );

                $gamesList[$tempGame->name] = $tempGame;

            }


        }catch( Exeption $error ){
            echo $error->getMessage();
        }

        return $gamesList;
    }