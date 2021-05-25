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



## 4 - Não tem passo 4... hehe
