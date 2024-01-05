#!/usr/bin/env node

import {
  useConfirm,
  useCurrentPath,
  useGenerator,
  useDisplayJson,
  usePackageStubsPath,
  usePrompt,
  useSentence,
  useLastFolderName,
} from "@henrotaym/scaffolding-utils";

const useStubsPath = usePackageStubsPath(
  "@deegital/laravel-trustup-io-package-boilerplate"
);

const capitalize = (value: string) => {
  const upperPart = value.charAt(0).toUpperCase();
  const lowerPart = value.substring(1);

  return `${upperPart}${lowerPart}`;
};

const kebabToCamel = (value: string) =>
  value.replace(/-./g, (m) => m.toUpperCase()[1]);

const kebabToPhpFormat = (value: string) => {
  const camelized = kebabToCamel(value);

  return capitalize(camelized);
};

const useScaffolding = () => {
  useSentence("Hi there 👋");
  useSentence("Let's scaffoldd a new laravel package 🎉");

  const folder = usePrompt("Folder location [.]", ".");
  const location = useCurrentPath(folder);
  const defaultPackageName = useLastFolderName(location);
  const packageName = usePrompt(
    `Package name [${defaultPackageName}]`,
    defaultPackageName
  );
  const organizationName = usePrompt(
    "PHP Organization [deegitalbe]",
    "deegitalbe"
  );

  const phpOrganizationName = kebabToPhpFormat(organizationName);
  const phpPackageName = kebabToPhpFormat(packageName);
  const phpNamespace = `${phpOrganizationName}\\${phpPackageName}`;

  const displayedData = {
    location,
    packageName,
    organizationName,
    phpOrganizationName,
    phpPackageName,
    phpNamespace,
  };

  useDisplayJson(displayedData);

  const isConfirmed = useConfirm("Is it correct ? ");

  if (!isConfirmed) {
    useSentence("Scaffolding was cancelled ❌");
    useSentence("Come back when you're ready 😎");
    return;
  }

  const generator = useGenerator(displayedData);

  generator.copy(useStubsPath(), location);

  useSentence("Successfully scaffolded package ✅");
  useSentence("Happy coding 🤓");
};

export default useScaffolding;
