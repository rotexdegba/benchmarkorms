<?php
include './vendor/autoload.php';
ini_set('memory_limit', -1); // no memory limit

$build = function(): void {
    
    $base_path = __DIR__;
    $ds = DIRECTORY_SEPARATOR;
    $github_pages_files_path = "{$base_path}{$ds}github-pages-files";
    $markdown_files_path = "{$github_pages_files_path}{$ds}markdown-pages";
    
    foreach (glob("{$markdown_files_path}{$ds}*.md") as $filename) {
        
        $output_files_path = "{$github_pages_files_path}{$ds}built-site";
        
        if(str_contains($filename, 'index.html.md')) {

            $output_files_path = $base_path;
        }

        $markdown_file_contents = file_get_contents($filename);                 // read markdown file contents
        $converter = new \League\CommonMark\GithubFlavoredMarkdownConverter();
        $html = $converter->convert($markdown_file_contents);                   // convert markdown to html
        $target_file_name = basename($filename, '.md');                         // extract destination file name from current file name
        $renderer = new \Rotexsoft\FileRenderer\Renderer(
            'site-template.php',
            [ 'content'=>$html ],
            [ $github_pages_files_path ]
        );                                                                      // instantiate the renderer object that will write the generated html into site-template.php
        $save_path = "{$output_files_path}{$ds}{$target_file_name}";
        file_put_contents($save_path, $renderer->renderToString());             // save rendered file

        echo "{$filename} successfully used to build `{$save_path}`" . PHP_EOL;
    }
    
    echo PHP_EOL . "Done building Website files" . PHP_EOL;
};

$build();
