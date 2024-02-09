<?php

function fileUpload($fileObject, $folderName = null, $oldFilePath = null)
{
    if ($fileObject)
    {
            if (file_exists($oldFilePath))
            {
                unlink($oldFilePath);
            }
        $fileName       = rand(10, 999999999).time().'.'.$fileObject->getClientOriginalExtension();
        $fileDirectory  = 'admin/uploaded-files/'.$folderName.'/';
        $fileObject->move($fileDirectory, $fileName);
        $fileUrl        = $fileDirectory.$fileName;
    } else{
        if (isset($oldFilePath))
        {
            $fileUrl = $oldFilePath;
        } else {
            $fileUrl = null;
        }
    }
    return $fileUrl;
}

function deleteFileFromServer($filePath)
{
    if (file_exists($filePath))
    {
        unlink($filePath);
    }
}
