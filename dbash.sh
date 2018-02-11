#!/usr/bin/env bash

docker exec -it $(docker ps -qf name=test_php) bash
