#!/bin/bash
# clear

echo "bin bash starting"

ACCESS_TOKEN=376309144d3f4f5c89e1162015e73990
ENVIRONMENT=production
REVISION=git log -n 1 --pretty=format:"%H"
COMMENT=Test
LOCAL_USERNAME='KevinMcCoy'

curl https://api.rollbar.com/api/1/deploy/ \
	-F access_token=$ACCESS_TOKEN \
	-F environment=$ENVIRONMENT \
	-F revision=$REVISION \
	-F comment=$COMMENT \
	-F local_username=$LOCAL_USERNAME
	-F rollbar_username=$LOCAL_USERNAME
