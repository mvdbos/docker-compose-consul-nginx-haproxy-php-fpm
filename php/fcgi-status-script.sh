#!/bin/sh

export SCRIPT_NAME=/status
export SCRIPT_FILENAME=/status
export QUERY_STRING=json
export REQUEST_METHOD=GET
cgi-fcgi -bind -connect 127.0.0.1:9000
