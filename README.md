# secret-system
##README.md
> *** author: cib_zhinianyuxin.com

It's just a system which is not completed , there are some tips:

1. you can use test/cib_sec to login ,but you are not admin!
2. only admin can upload file ,but whichone can not bypass my rules.

```
/**
$sign = array(
                    'id'=>$model->id,
                    'name'=>$model->username,
                    'sign'=>md5($model->id.$model->username),
                );
$_COOKIE['dbapp'] = serialize($sign);
**/
```
