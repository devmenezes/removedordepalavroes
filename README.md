# Como usar

3 passos para utilização.

## 1 - Instancie um RemovedorDePalavroes
```
$removedor = new RemovedorDePalavroes();
$textoProcessado = $removedor->processa($texto);
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



# Você ainda pode configurar (build) seu removedor para aceitar alguns tipos de palavras, de acordo com sua necessidade.

Exemplo: para um sistema que tenha que aceitar nomes de animais e de drogas ilícitas.
```
$removedor = new RemovedorDePalavroes();
$removedor->permitirAnimais()->permitirDrogas();
$textoProcessado = $removedor->processa($texto);
$texto = "Aquela vaca";
$textoLimpo = $removedor->processa($texto);

#### Resultado"Aquela vaca";