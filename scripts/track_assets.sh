#!/bin/bash
repo_path=git rev-parse --show-toplevel
assets_path="/public/assets/"
cd $repo_path$assets_path
git add .
git commit -m "update"
git push
cd $repo_path
git add $repo_path$assets_path
git commit -m "track assets"
git push