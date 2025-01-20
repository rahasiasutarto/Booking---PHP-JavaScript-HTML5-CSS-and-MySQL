#!/bin/sh
echo $1
git filter-branch --env-filter '
CORRECT_NAME="rahasiasutarto"
CORRECT_EMAIL="connorcarldev24@gmail.com"
export GIT_COMMITTER_NAME="$CORRECT_NAME"
export GIT_COMMITTER_EMAIL="$CORRECT_EMAIL"
export GIT_AUTHOR_NAME="$CORRECT_NAME"
export GIT_AUTHOR_EMAIL="$CORRECT_EMAIL"
' --tag-name-filter cat -- --branches --tags
