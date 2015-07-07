#!/bin/sh

VERSION="$(php getVersion.php)"
EDITION="$(php getEdition.php)"


echo "${VERSION}"
echo "${EDITION}"

