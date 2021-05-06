#!/bin/sh
LANG=C

TARGET=/var/www/html
chown apache:apache $TARGET
chmod 2755 $TARGET

# Deploy 時のタイムスタンプが UTC になってしまう
# touch コマンドに TZ を指定しても挙動に変化はなかったため
# この方式は不採用
#find $TARGET -type f -exec TZ=Asia/Tokyo touch {} \;

cat <<-EOF > /var/www/DeployENV.txt
	------------------------------------------------------------
	Deploy 中に認識している環境変数
	------------------------------------------------------------
	APPLICATION_NAME      : $APPLICATION_NAME
	DEPLOYMENT_ID         : $DEPLOYMENT_ID
	DEPLOYMENT_GROUP_NAME : $DEPLOYMENT_GROUP_NAME
	DEPLOYMENT_GROUP_ID   : $DEPLOYMENT_GROUP_ID
	LIFECYCLE_EVENT       : $LIFECYCLE_EVENT
EOF

