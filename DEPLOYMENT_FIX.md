# GitHub Pages Deployment Fix

## Problem
The GitHub Pages deployment was failing with the following error:
```
Conversion error: Jekyll::Converters::Scss encountered an error while converting 'assets/css/style.scss':
No such file or directory @ dir_chdir0 - /github/workspace/docs
```

## Root Cause
GitHub's auto-generated Pages deployment workflow was configured to build from a `./docs` source directory, but the Jekyll site files are actually located in the root directory of the repository.

The error occurred because:
1. GitHub Pages repository settings were set to deploy from `/docs` folder
2. The auto-generated workflow passed `source: ./docs` to the Jekyll build action
3. The SCSS converter tried to change directory to `/github/workspace/docs` which doesn't exist
4. This caused the SCSS conversion to fail

## Solution
Created a custom GitHub Pages deployment workflow (`.github/workflows/pages.yml`) that explicitly configures the Jekyll build to use the root directory (`./`) as the source instead of `./docs`.

### Changes Made
- **File**: `.github/workflows/pages.yml` (new)
  - Sets `source: ./` to build from the root directory
  - Sets `destination: ./_site` for the build output
  - Uses the standard GitHub Pages deployment actions
  - This workflow will override the auto-generated one

## How It Works
The custom workflow:
1. Checks out the repository code
2. Configures GitHub Pages
3. Builds the Jekyll site from the root directory (`./`)
4. Uploads the built site as an artifact
5. Deploys the artifact to GitHub Pages

## Next Steps
1. The workflow will automatically run on the next push to the `master` branch
2. Verify the deployment succeeds by checking the Actions tab
3. The Jekyll SCSS files should compile successfully without directory errors

## Alternative Solution (Not Implemented)
If you prefer to use the `/docs` folder approach:
1. Create a `docs/` directory in the repository
2. Move all Jekyll files (`_config.yml`, `_layouts/`, `_includes/`, `assets/`, etc.) into `docs/`
3. Update the `source` configuration in `_config.yml` to `.` (relative to docs folder)
4. Delete the custom `.github/workflows/pages.yml` workflow

However, this would require significantly more changes and restructuring of the repository.
