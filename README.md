# Explication du travail dans le dépôt

## Utilisation de GitFlow

Nous avons utilisé **GitFlow** pour gérer de manière structurée les différentes branches de notre projet. GitFlow nous a permis d'assurer une bonne organisation du travail en équipe, en séparant clairement les développements de nouvelles fonctionnalités et la gestion des corrections urgentes.

## Branches principales

- **`main`** : La branche de production, contenant les versions stables et validées.
- **`develop`** : La branche de développement où nous avons intégré toutes les nouvelles fonctionnalités avant de les préparer pour une release.

## Commits et messages
Nous avons suivi la convention de commit Angular, en utilisant des messages de commit clairs et explicites, indiquant le type de changement (par exemple, fix pour une correction de bug ou feat pour une nouvelle fonctionnalité).

## Gestion des branches de fonctionnalité et de hotfix

- Pour chaque nouvelle fonctionnalité, nous avons créé des branches `feature` en utilisant la commande :
  ```bash
  git flow feature start <nom-de-la-fonctionnalité>
- Lors de la découverte d'un bug urgent, nous avons utilisé la commande GitFlow pour créer des branches hotfix à partir de main :
  ```bash
  git flow hotfix start <version-hotfix>
## Pull Requests
Avant de fusionner nos changements dans main ou develop, nous avons créé des PR pour effectuer des revues de code. Une fois les modifications validées, les PR ont été fusionnées sur la branche cible.

## Gestion des tags
Lorsque nous avons terminé une release ou un hotfix, nous avons utilisé git tag pour taguer les versions sur main.

