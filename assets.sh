#!/bin/bash
cd public/assets/
git add .
git commit -m "update"
git push
cd ../../
git add .
git commit -m "update"
git push