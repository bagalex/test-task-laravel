#!/usr/bin/env bash

docker exec -it $(docker ps -qf name=watches_php) bash
