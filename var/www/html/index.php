<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>Amazon Linux2 Web Server</title>
    </head>

    <body bgcolor=ivory>
        <h3>Amazon Linux2 Web Server</h3>
        <small>
        Date : <?php $cmd = '/bin/date'; echo exec($cmd); ?><br>
        Hostname : <?php $cmd = '/bin/hostname'; echo exec($cmd); ?><br>
        OS : Amazon Linux2
        <hr>
        <p>
			<li> <a href=./phpinfo.php>PHP Info</a></li>
		<hr>
		<p>
			<li> <a href="https://docs.aws.amazon.com/ja_jp/codecommit/latest/userguide/welcome.html"  target="_blank">AWS CodeCommit</a>
			<li> <a href="https://docs.aws.amazon.com/ja_jp/codedeploy/latest/userguide/welcome.html"  target="_blank">AWS CodeDeploy</a>
			<li> <a href="https://docs.aws.amazon.com/ja_jp/codepipeline/latest/userguide/welcome.html"  target="_blank">AWS CodePipeline</a>
			<li> <a href="https://docs.aws.amazon.com/ja_jp/codebuild/latest/userguide/welcome.html"  target="_blank">AWS CodeBuild</a>
        <hr>
        <p>
			<li> <a href=https://github.com/>GitHub.com</a></li>
			<li> <a href=https://kubernetes.io/ja/>Kubernetes (K8s)</a></li>
        <hr>
        <P><img src="images/group-enrise-relations.png" alt="enrise-relations" width="133.3" height="43.0"></p> <small>@2021 ENRISE RELATIONS INC.</small>
    </body>
</html>
