#! /bin/bash

# a smol script I wrote to handle copying files from
# other directories into the repo

if [ ! -f ./.env ]; then
	echo "Missing .env file, aborting."
	return
fi

source ./.env

if [ ! -v "REPO_DIR" ]; then
	echo "Missing REPO_DIR, aborting."
	return
fi

ls $(echo $REPO_DIR)

cp -r ./* $(echo $REPO_DIR) 
