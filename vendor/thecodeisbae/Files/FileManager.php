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
 */
namespace thecodeisbae\FileManager;

final class FileManager
{
    static function store($name,$to,$rename = true) : array
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
        }
    
        return ['code'=>'1','message'=>'Please check for your input name'];    
    }

    static function lead($main_segment,$params,$controller,$function,$method = 'GET')
    {
        include(_CONTROLLERS_PATH.$controller.'.php');
    }
}