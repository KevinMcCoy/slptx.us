#!/bin/bash

clear

echo "bin bash starting"

ACCESS_TOKEN=376309144d3f4f5c89e1162015e73990
ENVIRONMENT=production
LOCAL_USERNAME='KevinMcCoy'
REVISION=`git log -n 1 --pretty=format:"%H"`

curl https://api.rollbar.com/api/1/deploy/ \
	-F access_token=$ACCESS_TOKEN \
	-F environment=$ENVIRONMENT \
	-F revision=$REVISION \
	-F local_username=$LOCAL_USERNAME
