<?php

/**
 * The class responsible of interactions with filesystem
 * Usage :
 *  Saving a file : 
 *      Eg : FileManager::store(input_name_of_the_file,save_path) (Basically) 
 * 
 *      By default your saved file will be renamed by adding a token generated using date object
 *      You can prevent this renaming by adding a last params to the function a bool false for
 *      not renaming and save as the original name
 * 
 *      Eg : FileManager::store(input_name_of_the_file,save_path,false)
 *  
**/

namespace thecodeisbae\FileManager;

final class FileManager
{
    static function store($name,$to,$rename = true) : array /** Storing a file */
    {
        if(array_key_exists($name,$_FILES))
        {
            if (!file_exists($to)) {
                mkdir($to, 0500, true);
            }
            
            if($rename)
                $specfile = explode('.',$_FILES[$name]['name'])[0].'_'.strtotime(date("Y-m-d H:i:s")).'.'.explode('.',$_FILES[$name]['name'])[sizeof( explode('.',$_FILES[$name]['name']))-1];
            else
                $specfile = explode('.',$_FILES[$name]['name'])[0].'.'.explode('.',$_FILES[$name]['name'])[sizeof( explode('.',$_FILES[$name]['name']))-1];
            
            $uploadfile = $to.basename($specfile);

            if (move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile))
            {
                return ['savedAs'=>$specfile];
            }
            return ['code'=>'2','message'=>'An error occured please check for savepath permissions'];   
        }
    
        return ['code'=>'1','message'=>'Please check for your input name'];    
    }

    static function stream($filename)
    {
        if(strtolower(explode('.',$filename)[sizeof(explode('.',$filename))-1]) == 'pdf')
        {
            ini_set('memory_limit', '-1');
            $filePath = _FILES_PATH.$filename;
            header('Content-type:application/pdf');
            header('Content-disposition: inline; filename="'.$filename.'"');
            header('content-Transfer-Encoding:binary');
            header('Accept-Ranges:bytes');
            @readfile($filePath);
        }
        else{
            return ['code'=>1,'message'=>'An error occured while loading your file please check its extension'];
        }  
    }

    static function download($filename)
    { 
        ini_set('memory_limit', '-1');
        $filePath = _FILES_PATH.$filename;
        header('Content-type:application/octet-stream');
        header('Content-disposition: attachment; filename="'.$filename.'"');
        header('content-Transfer-Encoding:binary');
        header('Accept-Ranges:bytes');
        @readfile($filePath);
        exit(); 
    }

    static function delete($filename,$path = '') /** The current function unlink or delete the file you provide in params, searching it on the provided path **/
    {
        if($path != '')
        {        
            $file_pointer = _FILES_PATH .$path.$filename; 
            if(!file_exists($file_pointer))
            {
                return ['code'=>1,'message'=>'Please check the provided filepath'];
            }
            unlink($file_pointer);
            return ['code'=>0,'message'=>'File deleted'];
        }
        
        $file_pointer = _FILES_PATH.$filename;
        if(!file_exists($file_pointer))
        {
            return ['code'=>2,'message'=>'The file was not found in default filepath, please provide the correct filepath'];
        }
        unlink($file_pointer);
        return ['code'=>0,'message'=>'File deleted'];

    }

}