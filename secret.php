this is a secret page , you find it!
there are some code in upload page.

###
$msg = null;
        $is_upload = false;
        $img_path = '';
        if (isset($_POST['submit'])) {
            if (file_exists($UPLOAD_PATH)) {
                $deny_ext = array(".php",".php5",".php4",".php3",".php2",".html",".htm",".phtml",".pHp",".pHp5",".pHp4",".pHp3",".pHp2",".Html",".Htm",".pHtml",".jsp",".jspa",".jspx",".jsw",".jsv",".jspf",".jtml",".jSp",".jSpx",".jSpa",".jSw",".jSv",".jSpf",".jHtml",".asp",".aspx",".asa",".asax",".ascx",".ashx",".asmx",".cer",".aSp",".aSpx",".aSa",".aSax",".aScx",".aShx",".aSmx",".cEr",".sWf",".swf");
                $file_name = trim($_FILES['upload_file']['name']);
                $file_name = $this->deldot($file_name);
                $file_ext = strrchr($file_name, '.');
                $file_ext = strtolower($file_ext);
                $file_ext = str_ireplace('::$DATA', '', $file_ext);

                if (!in_array($file_ext, $deny_ext)) {
                    if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $UPLOAD_PATH . '/' . $_FILES['upload_file']['name'])) {
                        $img_path = $UPLOAD_PATH . '/' . $file_name;
                        $is_upload = true;
                        \Yii::$app->getSession()->setFlash('success',"上传成功，文件路径为".$img_path);
                        return $this->render('index');
                    }
                } else {
                    $msg = '此文件不允许上传';
                }
            } else {
                $msg = $UPLOAD_PATH . '文件夹不存在,请手工创建！';
            }
            if ($msg) {
                \Yii::$app->getSession()->setFlash('error', $msg);
                return $this->render('index');
            }
        }else{
            return $this->render('index');
        }
###
