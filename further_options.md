# List of further options
At the moment you will find the following in this branch additional to the master-branch

## configs
The `config.json` has been added. This file contains a config entry which allows to configure the color of the headline in the file `hello.twig`.

## template containers
There is a data provider and a container listet in the plugin.json:
```json
"dataProviders":[
    {
          "key":"HelloWorld\\Containers\\ExampleDataProvider",
          "name":"ExampleDataProvider",
          "description": "Displays example Content."
    }
],
"containers":
[
    {
          "key":"Example.Container",
          "name":"Example container",
          "description":"Example Container to render content."
    }
]
```
The data provider can be linked to the container to display the contents of the file `ExampleContent.twig` in the template `hello.twig`.