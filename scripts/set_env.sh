#!/bin/bash

true > .env && \
doppler secrets download \
  --project "trustup-io-app-commons" \
  --config local \
  --no-file \
  --format env \
  >> .env
doppler secrets download \
  --project laravel-trustup-io-package-boilerplate \
  --config local \
  --no-file \
  --format env | grep -v '^DOPPLER_' \
  >> .env