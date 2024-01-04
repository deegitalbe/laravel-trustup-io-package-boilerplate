#!/usr/bin/env node

import {
  // useConfirm,
  useCurrentPath,
  // useGenerator,
  useDisplayJson,
  // usePackageStubsPath,
  usePrompt,
  useSentence,
  useLastFolderName,
} from "@henrotaym/scaffolding-utils";

// const useStubsPath = usePackageStubsPath(
//   "@deegital/laravel-trustup-io-package-boilerplate"
// );

const useScaffolding = () => {
  useSentence("Hi there 👋");
  useSentence("Let's scaffold a new laravel package 🎉");

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

  const displayedData = {
    location,
    packageName,
    organizationName,
  };

  useDisplayJson(displayedData);

  // const isConfirmed = useConfirm("Is it correct ? ");

  // if (!isConfirmed) {
  //   useSentence("Scaffolding was cancelled ❌");
  //   useSentence("Come back when you're ready 😎");
  //   return;
  // }

  // const generator = useGenerator(displayedData);

  // generator.copy(useStubsPath(), location);

  // useSentence("Successfully scaffolded project ✅");
  // useSentence("Happy coding 🤓");
};

export default useScaffolding;
