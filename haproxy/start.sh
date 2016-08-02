#!/bin/sh
consul-template -consul=consul:8500 -config=/tmp/haproxy.json 2>&1 > /tmp/ct.log
