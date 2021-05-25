
![GitHub](https://img.shields.io/github/license/devmenezes/removedordepalavroes?style=flat-square) ![GitHub manifest version](https://img.shields.io/github/manifest-json/v/devmenezes/removedordepalavroes?style=flat-square)

# Como usar

3 passos para utilização.

## 1 - Instancie um RemovedorDePalavroes
```
$removedor = new RemovedorDePalavroes();
```

## 2 - Passe um texto pra ele processar

```
$texto = "Aquela vaca";

```


## 3 - Recupere o texto "limpo"

```
$textoLimpo = $removedor->processa($texto);
```


####     Resultado"Aquela ****";


## Adicione ou remova palavrões

Edite as Listas de Palavras (elas se encontram no diretório src/WordLists).
Não utilize acentos ou símbolos nessas palavras.
Adicione ou remova quantas quiser.

Aceitamos sugestões de novas palavras (rafael.87@gmail.com)

## Você ainda pode configurar (build) seu removedor para aceitar alguns tipos de palavras, de acordo com sua necessidade.

Exemplo: para um sistema que tenha que aceitar nomes de animais e de drogas ilícitas.
```
$removedor = new RemovedorDePalavroes();
$removedor->permitirAnimais()->permitirDrogas();
$textoProcessado = $removedor->processa($texto);
$texto = "Aquela vaca";
$textoLimpo = $removedor->processa($texto);
```

#### Resultado"Aquela vaca";
