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
		<li> <a href="https://docs.aws.amazon.com/ja_jp/codecommit/latest/userguide/welcome.html"  target="_blank">AWS CodeCommit</a>
		<li> <a href="https://docs.aws.amazon.com/ja_jp/codedeploy/latest/userguide/welcome.html"  target="_blank">AWS CodeDeploy</a>
		<li> <a href="https://docs.aws.amazon.com/ja_jp/codepipeline/latest/userguide/welcome.html"  target="_blank">AWS CodePipeline</a>
		<li> <a href="https://docs.aws.amazon.com/ja_jp/codebuild/latest/userguide/welcome.html"  target="_blank">AWS CodeBuild</a>
		<hr>
		<p>
		<li> <a href=./phpinfo.php>PHP Info</a></li>
		<hr>
		<P><img src="images/group-enrise-solution.png" alt="enrise-solution" width="100.00" height="40.75"></p> <small>@2021 ENRISE SOLUTION, Inc.</small>
    </body>
</html>

