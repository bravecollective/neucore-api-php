# Generate the Client

- Get the generator, check releases here https://github.com/OpenAPITools/openapi-generator/releases:
  ```shell
  export GENERATOR_VERSION=7.15.0
  wget https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/$GENERATOR_VERSION/openapi-generator-cli-$GENERATOR_VERSION.jar
  ```

- Copy the OpenAPI definition file from a [release](https://github.com/tkhamez/neucore/releases) from
  `web/application-api-3.yml` to `application-api-3.yml`, or fetch it from a running application, e.g.:
  ```shell
  wget https://account.bravecollective.com/application-api-3.yml
  ```

- Delete the directories `lib` and `docs`:
  ```shell
  rm -R lib docs
  ```

- Generate the client:
  ```shell
  java -jar openapi-generator-cli-$GENERATOR_VERSION.jar generate -i application-api-3.yml -g php -c openapi-config.json
  ```

- Add the directories `lib` and `docs`:
  ```shell
  git add lib docs
  ```

- Revert changes in `.gitignore`:
  ```shell
  git checkout .gitignore
  ```

- In `.openapi-generator/FILES`, delete any new lines that starts with `test/`.

- In `README.md`, undo all changes above `### Manual Installation` and increase the version for
  `bravecollective/neucore-api`.

- Commit everything, adjust the version in the commit message:
  ```shell
  git commit -a -m "Update client to Neucore version 2.9.0, generated with OpenAPI Generator $GENERATOR_VERSION."
  ```
