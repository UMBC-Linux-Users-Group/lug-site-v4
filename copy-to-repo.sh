#! /bin/bash

if [ ! -f ./.env ]; then
	echo "Missing .env file, aborting."
	return
fi

source ./.env

if [ ! -v "REPO_DIR" ]; then
	echo "Missing REPO_DIR, aborting."
	return
fi

cp -r ./* $(echo $REPO_DIR) 
