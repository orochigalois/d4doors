$parent_folder = "wp-content/themes/"
$subfolder = Get-ChildItem -Directory $parent_folder | Select-Object -First 1
if ($subfolder) {
    Set-Location $subfolder.FullName
    Write-Host "Now in directory: $($subfolder.FullName)"
    
    # Run npm start
    npm run start
}
