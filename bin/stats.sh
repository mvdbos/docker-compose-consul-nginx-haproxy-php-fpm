#!/bin/sh
docker stats $(docker ps --format={{.Names}})
