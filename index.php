<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="page page--dashboard" data-new-gr-c-s-check-loaded="14.1018.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <aside class="sidebar">
        <div class="flex-grow flex flex-col p-4 min-h-0">
            <div class="dropdown w-full mb-4">
                <button type="button" class="dropdown__trigger listitem w-full h-14 px-3 border rounded" data-toggle="dropdown">
                    <img src="assets/brand-a.svg" class="rounded-full w-7 h-7 mr-2" alt="">
                    <div class="flex flex-col">
                        <h3 class="text-body-01 font-semibold mb-0">Puppr</h3>
                        <span class="text-body-small-01 text-text-03">Saga Design Team</span>
                    </div>
                    <svg role="img" class="icon icon-mono icon-angle-down ml-auto text-icon-02">
                    <use xlink:href="icons/mono/icons-mono.svg#icon-angle-down"></use>
                    </svg>
                    <!-- <svg role="img" class="icon icon-mono icon-angle-down ml-auto text-icon-02"> -->
                    <use xlink:href="icons/mono/icons-mono.svg#icon-angle-down">
                    <svg id="icon-angle-down" viewBox="0 0 16 16"><path d="M4.167 5.002L3 6.137l5 4.86 5-4.86-1.167-1.135L8 8.73 4.167 5.002z"></path></svg>
                    <!-- </use></svg> -->
                </button>
                <div class="flex w-100 h-80 rounded shadow-small bg-ui-01 text-text-01 text-body-small-01 divide-x divide-ui-04 outline-none dropdown__menu" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="w-1/2 flex flex-col" role="none">
                        <div class="p-4 pb-2">
                            <h3 class="text-sub-heading-01 text-text-03 font-semibold mb-3">OWNED TEAMS</h3>
                        </div>

                        <button type="button" class="listitem
                        
                        h-14
                        active
                        w-full px-4">
                            
                            
                            <img class="inline-block w-5 h-5 rounded-full mr-2 border border-ui-04" src="assets/avatar-male-01.png" alt="">
                            
                            
                            <div class="flex flex-col">
                                <h3 class="text-body-01 font-semibold mb-0">SDT Team</h3>
                                
                                <span class="text-body-small-01  dark:text-text-02-dark">Owner</span>
                                
                            </div>

                            
                        </button>

                        <div class="p-4 pb-2">
                            <h3 class="text-sub-heading-01 text-text-03 font-semibold mb-3">INVITED TO TEAMS</h3>
                        </div>

                        <div class="overflow-y-auto flex-grow">
                            <button type="button" class="listitem
                            
                            h-14
                            
                            w-full px-4 border-b">
                                
                                
                                <img class="inline-block w-5 h-5 rounded-full mr-2 border border-ui-04" src="assets/avatar-male-01.png" alt="">
                                
                                
                                <div class="flex flex-col">
                                    <h3 class="text-body-01 font-semibold mb-0">Alex's Team</h3>
                                    
                                    <span class="text-body-small-01 text-text-03 dark:text-text-02-dark">Guest</span>
                                    
                                </div>

                                
                            </button>
                            <button type="button" class="listitem
                            
                            h-14
                            
                            w-full px-4 border-b">
                                
                                
                                <img class="inline-block w-5 h-5 rounded-full mr-2 border border-ui-04" src="assets/avatar-male-01.png" alt="">
                                
                                
                                <div class="flex flex-col">
                                    <h3 class="text-body-01 font-semibold mb-0">Hafsa's Team</h3>
                                    
                                    <span class="text-body-small-01 text-text-03 dark:text-text-02-dark">Team Member</span>
                                    
                                </div>

                                
                            </button>
                        </div>
                    </div>

                    <div class="w-1/2 flex flex-col" role="none">
                        <div class="p-4 pb-2">
                            <h3 class="text-sub-heading-01 text-text-03 font-semibold mb-3">WORKSPACES</h3>

                             <div class="relative @@width">
                                <input type="search" class="px-2 w-full h-7 pr-2 pl-7 w-full" placeholder="Placeholder">

                                
                                <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none text-icon-02 dark:text-icon-03-dark">
                                    <svg role="img" class="icon icon-mono icon-search text-current"><use xlink:href="icons/mono/icons-mono.svg#icon-search"></use></svg>
                                </div>
                                
    
                                

                                
                            </div>
                        </div>

                        <div class="overflow-y-auto">
                            <button type="button" class="listitem
                            h-12
                            
                            
                            w-full px-4">
                                
                                
                                
                                <img src="assets/brand-a.svg" class="rounded-full w-5 h-5 mr-2" alt="">
                                
                                <div>
                                    <h3 class="text-body-01 font-semibold mb-0">Puppr</h3>
                                    
                                </div>

                                
                            </button>
                            <button type="button" class="listitem
                            h-12
                            
                            active
                            w-full px-4">
                                
                                
                                
                                <img src="assets/brand-b.svg" class="rounded-full w-5 h-5 mr-2" alt="">
                                
                                <div>
                                    <h3 class="text-body-01 font-semibold mb-0">Candbar</h3>
                                    
                                </div>

                                
                            </button>
                            <button type="button" class="listitem
                            h-12
                            
                            
                            w-full px-4">
                                
                                
                                
                                <img src="assets/brand-c.svg" class="rounded-full w-5 h-5 mr-2" alt="">
                                
                                <div>
                                    <h3 class="text-body-01 font-semibold mb-0">BetaBikes</h3>
                                    
                                </div>

                                
                            </button>
                        </div>

                        <div class="p-4 mt-auto border-t border-ui-04">
                            <button type="button" class="
                                w-full px-xsmall py-1 text-button-lower rounded-sm inline-flex justify-center items-center border bg-ui-01 text-text-primary-01 border-ui-04
                                hover:border-hover-primary
                                active:bg-active-primary active:text-text-04
                                disabled:bg-ui-01 disabled:text-disabled-03 disabled:border-disabled-02
                                
                                ">

                                
                                <svg role="img" class="icon icon-mono icon-plus transition-none mr-1"><use xlink:href="icons/mono/icons-mono.svg#icon-plus"></use></svg>
                                

                                <span>Add new workspace</span>

                                
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="listitem w-full px-4 h-12 rounded active mb-4">
                <svg role="img" class="icon icon-duo icon-duo-folder w-5 h-5 mr-2">
                
                <use xlink:href="assets/icons-duo.svg#icon-folder">
                
</use></svg>

                <h3 class="text-body-01 font-semibold mb-0">Projects</h3>

                <svg role="img" class="icon icon-mono icon-x ml-auto text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-x"></use></svg>
            </button>

             <div class="relative mb-4 w-full">
                <input type="search" class="px-2 w-full h-7 pr-2 pl-7 w-full" placeholder="Placeholder">

                
                <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none text-icon-02 dark:text-icon-03-dark">
                    <svg role="img" class="icon icon-mono icon-search text-current"><use xlink:href="icons/mono/icons-mono.svg#icon-search"></use></svg>
                </div>
                
    
                

                
            </div>

            <hr class="border-ui-04">

            <div class="flex-grow flex-shrink overflow-y-auto">
                <div class="listitem h-12 w-full">

                <!-- <svg role="img" class="icon icon-duo icon-duo-folder-team w-5 h-5 mr-2 dark:text-icon-03-dark"><use xlink:href="icons/duo/icons-duo.svg#icon-folder-team"></use></svg> -->
                <svg class="icon icon-duo icon-duo-folder-team w-5 h-5 mr-2 dark:text-icon-03-dark" id="icon-folder-team" viewBox="0 0 16 16"><path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" d="M2.332 13.997h11.333a1 1 0 001-1V5.664a1 1 0 00-1-1h-7L4.96 2.957a1 1 0 00-.708-.293H2.332a1 1 0 00-1 1v9.333a1 1 0 001 1z"></path><path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" d="M5.139 7.444a1.444 1.444 0 102.888 0 1.444 1.444 0 00-2.888 0zM8.75 8.888a1.083 1.083 0 102.166 0 1.083 1.083 0 00-2.166 0z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.578 9.613c-1.705 0-3.104.876-3.244 2.6-.007.094.172.289.263.289H9.56c.271 0 .276-.219.271-.29-.105-1.77-1.526-2.599-3.254-2.599zm5.227 2.892h-1.39c0-.813-.269-1.563-.721-2.166 1.228.015 2.231.637 2.307 1.95.003.053 0 .216-.196.216z"></path></svg>
                    <h3 class="text-body-01 font-semibold mb-0">Workspace Files </h3>
                    <button type="button" class="ml-auto hover:text-icon-primary-01">
                        <svg role="img" class="icon icon-mono icon-plus">
                        
                        <use xlink:href="icons/mono/icons-mono.svg#icon-plus">
                        </use>
                        </svg>
                    </button>
                </div>
                <div class="pl-4 pb-4">
                    <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-primary-01 bg-active-ui hover:text-text-primary-01">Home</a>
                    <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-01 hover:text-text-primary-01">Product / Service Images</a>

                    <div class="relative">
                        <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-primary-01 bg-active-ui hover:text-text-primary-01 border border-transparent focus:outline-none focus:border focus:border-active-primary" contenteditable="true">
                            <span>Display Ads</span>
                        </a>
                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-2">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-4 h-4 text-icon-primary-01"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <button type="button" class="flex items-center h-8 px-3 text-text-01 text-body-small-01">Rename</button>
                                    <button type="button" class="flex items-center h-8 px-3 text-text-danger text-body-small-01">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-01 hover:text-text-primary-01">Social</a>
                    <div id="workspace-all" class="hidden" style="display: none;">
                        <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-01 hover:text-text-primary-01">Display Ads</a>
                        <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-01 hover:text-text-primary-01">Social</a>
                    </div>
                    <button type="button" class="text-button-upper font-medium mt-2 rounded-sm inline-flex justify-center items-center text-text-03 hover:text-hover-primary active:text-active-primary disabled:text-disabled-03" data-collapse="#workspace-all" data-primarytext="EXPAND ALL" data-alttext="SHOW LESS">
                        <svg role="img" class="icon icon-mono icon-angle-down transition-none mr-1"><use xlink:href="icons/mono/icons-mono.svg#icon-angle-down"></use></svg>
                        <span>EXPAND ALL</span>
                    </button>
                </div>

                <hr class="border-ui-04">

                <div class="listitem h-12 w-full">
                    <svg role="img" class="icon icon-duo icon-duo-folder-lock w-5 h-5 mr-2 dark:text-icon-03-dark"><use xlink:href="assets/icons-duo.svg#icon-folder-lock"></use></svg>
                    <h3 class="text-body-01 font-semibold mb-0">Private Files</h3>
                    <button type="button" class="ml-auto hover:text-icon-primary-01">
                        <svg role="img" class="icon icon-mono icon-plus"><use xlink:href="icons/mono/icons-mono.svg#icon-plus"></use></svg>
                    </button>
                </div>
                <div class="pl-4 pb-4">
                    <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-01 border-b border-ui-04 hover:text-text-primary-01">Home</a>
                    <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-01 hover:text-text-primary-01">NDA Files</a>
                </div>

                <hr class="border-ui-04">

                <div class="listitem h-12 w-full">
                    <svg role="img" class="icon icon-duo icon-duo-share w-5 h-5 mr-2 dark:text-icon-03-dark"><use xlink:href="assets/icons-duo.svg#icon-share"></use></svg>
                    <h3 class="text-body-01 font-semibold mb-0">Shared Files</h3>
                </div>
                <div class="pl-4 pb-4">
                    <a href="#!" class="flex items-center h-8 px-3 rounded-sm text-body-small-01 text-text-01 hover:text-text-primary-01">All shared with you</a>
                </div>
            </div>

            <div class="bg-ui-02 p-4 rounded text-body-small-01 mt-auto">
                <p class="font-semibold mb-3">How to use folders?</p>
                <button type="button" class="
                    @@size rounded-sm inline-flex justify-center items-center text-text-03
                    hover:text-hover-primary
                    active:text-active-primary
                    disabled:text-disabled-03
                    text-button-lower font-medium
                    ">

                    

                    <span>Learn more</span>

                    
                    <svg role="img" class="icon icon-mono icon-angle-right transition-none ml-1 w-3 h-3"><use xlink:href="icons/mono/icons-mono.svg#icon-angle-right"></use></svg>
                    
                </button>
            </div>
        </div>

        <footer class="mt-auto flex border-t border-ui-04 divide-x divide-ui-04">
            <div class="dropdown w-full">
                <button type="button" class="listitem h-12 pr-2 pl-3 w-full mb-0 rounded" data-toggle="dropdown">
                    <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04" src="assets/avatar-male-01.png" alt="">
                    <div class="flex flex-col">
                        <h3 class="text-sub-heading-01 font-semibold mb-0 text-text-02">Oleg Shydlovskyi</h3>
                        <span class="text-caption-01 text-text-03">Owner</span>
                    </div>
                    <svg role="img" class="icon icon-mono icon-angle-up ml-auto text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-angle-up"></use></svg>
                </button>
                <div class="dropdown__menu top-auto bottom-full ml-3 mb-2 w-full rounded shadow-small bg-ui-01 text-text-01 text-body-small-01 divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 group hover:bg-active-ui hover:text-text-primary-01 ">
                            <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2 group-hover:text-icon-primary-01 dark:text-icon-03-dark "><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                            <span class="mb-0">Brand Workspaces</span>
                        </a>
                        <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 group hover:bg-active-ui hover:text-text-primary-01 ">
                            <svg role="img" class="icon icon-duo icon-team w-4 h-4 mr-2 group-hover:text-icon-primary-01 dark:text-icon-03-dark "><use xlink:href="assets/icons-duo.svg#icon-team"></use></svg>
                            <span class="mb-0">Team Members</span>
                        </a>
                        <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 group hover:bg-active-ui hover:text-text-primary-01 ">
                            <svg role="img" class="icon icon-duo icon-cog w-4 h-4 mr-2 group-hover:text-icon-primary-01 dark:text-icon-03-dark "><use xlink:href="assets/icons-duo.svg#icon-cog"></use></svg>
                            <span class="mb-0">Account Settings</span>
                        </a>
                    </div>
                    <div class="py-1" role="none">
                        <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 group hover:bg-active-ui hover:text-text-primary-01 ">
                            <svg role="img" class="icon icon-duo icon-bubble w-4 h-4 mr-2 group-hover:text-icon-primary-01 dark:text-icon-03-dark "><use xlink:href="assets/icons-duo.svg#icon-bubble"></use></svg>
                            <span class="mb-0">Get support</span>
                        </a>
                        <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 group hover:bg-active-ui hover:text-text-primary-01 ">
                            <svg role="img" class="icon icon-duo icon-share w-4 h-4 mr-2 group-hover:text-icon-primary-01 dark:text-icon-03-dark "><use xlink:href="assets/icons-duo.svg#icon-share"></use></svg>
                            <span class="mb-0">Refer a friend</span>
                        </a>
                        <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 group hover:bg-active-ui hover:text-text-primary-01 ">
                            <svg role="img" class="icon icon-duo icon-logout w-4 h-4 mr-2 group-hover:text-icon-primary-01 dark:text-icon-03-dark "><use xlink:href="assets/icons-duo.svg#icon-logout"></use></svg>
                            <span class="mb-0">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
            <button type="button" class="w-12 h-12 flex justify-center items-center flex-shrink-0 hover:text-icon-primary-01">
                <svg role="img" class="icon icon-duo icon-duo-bell w-5 h-5"><use xlink:href="assets/icons-duo.svg#icon-bell"></use></svg>
            </button>
        </footer>
    </aside>

    <main class="main">
        <div class="flex justify-between items-start mb-6">
            <div class="flex items-center">
                <div class="flex flex-col items-start min-w-[176px] pr-6">
                    
                    
                    <h2 class="text-heading-01 font-bold text-text-01 dark:text-text-01-dark">Home</h2>
                    
                    <p class="text-body-01 text-text-02 mt-1 dark:text-text-01-dark">Workspace files</p>
                    
                    <button type="button" class="ml-auto hover:text-icon-primary-01">
                        <svg role="img" class="icon icon-mono icon-plus"><use xlink:href="icons/mono/icons-mono.svg#icon-plus"></use></svg>
                    </button>
                </div>

                <div class="inline-flex items-center ">
                    <span class="mr-1 text-body-small-01 text-text-01">2/5</span>
                    <div class="w-5">
                  
                    </div>

                    
                    <span class="ml-3 text-caption-01 text-text-02">You have 4 unused slots</span>
                    
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <div class="dropdown">
                    <button type="button" class="dropdown__trigger dropdown__trigger--outlined h-8 w-50 group" data-toggle="dropdown">
                        <div class="flex items-center mr-auto">
                            <svg role="img" class="icon icon-mono icon-filter text-icon-02 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-filter"></use></svg>
                            <span>Selected tags</span>
                        </div>

                        <span class="inline-flex justify-center items-center min-w-4 rounded-full py-0.25 px-1 ml-2 bg-interactive-01 text-caption-01 text-ui-01 font-semibold">5</span>

                        <div class="flex items-center">
                            <svg role="img" class="icon icon-mono icon-angle-down text-icon-02 ml-2"><use xlink:href="icons/mono/icons-mono.svg#icon-angle-down"></use></svg>
                        </div>
                    </button>

                    <div class="dropdown__menu w-60 rounded text-body-small-01 divide-y divide-ui-04" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="p-4" role="none">
                            <h3 class="text-sub-heading-01 text-text-03 font-semibold mb-3">FILTER WITH TAGS</h3>

                            <label class="select-control pl-6  w-full h-8 bg-ui-01">
                                <input type="checkbox" class="hidden">
                                
                                
                                <svg role="img" class="icon icon-mono icon-checkbox left-0 "><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                <svg role="img" class="icon icon-mono icon-checkbox-checked left-0 "><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                
                                

                                

                                
                                <span class="text-form-text text-text-01">Most Recent</span>
                                

                                
                            </label>

                            <label class="select-control pl-6  w-full h-8 bg-ui-01">
                                <input type="checkbox" class="hidden">
                                
                                
                                <svg role="img" class="icon icon-mono icon-checkbox left-0 "><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                <svg role="img" class="icon icon-mono icon-checkbox-checked left-0 "><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                
                                

                                

                                
                                <span class="text-form-text text-text-01">Oldest</span>
                                

                                
                            </label>
                        </div>

                        <div class="overflow-y-auto divide-y divide-ui-04 max-h-[600px]">
                            <div>
                                <button type="button" class="listitem
                                h-12
                                
                                
                                w-full collapse-trigger px-4 border-0">
                                    
                                    
                                    
                                    <div>
                                        <h3 class="text-body-01 font-semibold mb-0">Custom Tags</h3>
                                        
                                    </div>

                                    
                                    <svg role="img" class="icon icon-mono icon-angle-down ml-auto text-icon-02 "><use xlink:href="icons/mono/icons-mono.svg#icon-angle-down"></use></svg>
                                    
                                </button>
                                <div class="collapse p-4 pt-2 hidden">
                                     <div class="relative @@width">
                                        <input type="search" class="px-2 w-full h-7 pr-2 pl-7 mb-3 w-full" placeholder="Placeholder">

                                        
                                        <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none text-icon-02 dark:text-icon-03-dark">
                                            <svg role="img" class="icon icon-mono icon-search text-current"><use xlink:href="icons/mono/icons-mono.svg#icon-search"></use></svg>
                                        </div>
                                        
    
                                        

                                        
                                    </div>
                            
                                    
                                    <label class="select-control h-8 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-8 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-8 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-8 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-8 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-8 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <button type="button" class="
                                        px-xsmall py-1 mt-2 text-button-lower rounded-sm inline-flex justify-center items-center border bg-ui-01 text-text-primary-01 border-ui-04
                                        hover:border-hover-primary
                                        active:bg-active-primary active:text-text-04
                                        disabled:bg-ui-01 disabled:text-disabled-03 disabled:border-disabled-02
                                        
                                        ">

                                        
                                        <svg role="img" class="icon icon-mono icon-plus transition-none mr-1"><use xlink:href="icons/mono/icons-mono.svg#icon-plus"></use></svg>
                                        

                                        <span>Manage tags</span>

                                        
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="listitem
                                h-12
                                
                                
                                w-full collapse-trigger px-4 border-0">
                                    
                                    
                                    
                                    <div>
                                        <h3 class="text-body-01 font-semibold mb-0">Team Members</h3>
                                        
                                    </div>

                                    
                                    <svg role="img" class="icon icon-mono icon-angle-down ml-auto text-icon-02 "><use xlink:href="icons/mono/icons-mono.svg#icon-angle-down"></use></svg>
                                    
                                </button>
                                <div class="collapse p-4 pt-2 hidden">
                                     <div class="relative @@width">
                                        <input type="search" class="px-2 w-full h-7 pr-2 pl-7 mb-3 w-full" placeholder="Placeholder">

                                        
                                        <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none text-icon-02 dark:text-icon-03-dark">
                                            <svg role="img" class="icon icon-mono icon-search text-current"><use xlink:href="icons/mono/icons-mono.svg#icon-search"></use></svg>
                                        </div>
                                        
    
                                        

                                        
                                    </div>
                            
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                </div>
                            </div>
                            <div>
                                <button type="button" class="listitem
                                h-12
                                
                                
                                w-full collapse-trigger px-4 border-0">
                                    
                                    
                                    
                                    <div>
                                        <h3 class="text-body-01 font-semibold mb-0">Guests</h3>
                                        
                                    </div>

                                    
                                    <svg role="img" class="icon icon-mono icon-angle-down ml-auto text-icon-02 "><use xlink:href="icons/mono/icons-mono.svg#icon-angle-down"></use></svg>
                                    
                                </button>
                                <div class="collapse p-4 pt-2 hidden">
                                     <div class="relative @@width">
                                        <input type="search" class="px-2 w-full h-7 pr-2 pl-7 mb-3 w-full" placeholder="Placeholder">

                                        
                                        <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none text-icon-02 dark:text-icon-03-dark">
                                            <svg role="img" class="icon icon-mono icon-search text-current"><use xlink:href="icons/mono/icons-mono.svg#icon-search"></use></svg>
                                        </div>
                                        
    
                                        

                                        
                                    </div>
                            
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                    <label class="select-control h-9 pr-6 w-full">
                                        <input type="checkbox" class="hidden">
                                        <img class="inline-block w-7 h-7 rounded-full mr-2 border border-ui-04 order-first" src="assets/avatar-male-01.png" alt="">
                                        <svg role="img" class="icon icon-mono icon-checkbox right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox"></use></svg>
                                        <svg role="img" class="icon icon-mono icon-checkbox-checked right-0"><use xlink:href="icons/mono/icons-mono.svg#icon-checkbox-checked"></use></svg>
                                        <span class="text-form-text text-text-01">Menu item</span>
                                    </label>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="p-4">
                            <div class="flex justify-end items-center">
                                <button type="button" class="
                                    @@size rounded-sm inline-flex justify-center items-center text-text-03
                                    hover:text-hover-primary
                                    active:text-active-primary
                                    disabled:text-disabled-03
                                    text-button-lower font-medium mr-3
                                    ">

                                    

                                    <span>Clear</span>

                                    
                                </button>

                                <button type="button" class="
                                    px-xsmall h-7 text-button-lower rounded-sm inline-flex justify-center items-center border bg-interactive-01 text-text-04 border-interactive-01
                                    hover:bg-hover-primary hover:border-hover-primary
                                    active:bg-active-primary active:border-active-primary
                                    disabled:bg-ui-01 disabled:text-disabled-03 disabled:border-disabled-02
                                    
                                    ">

                                    

                                    <span>Apply Filters</span>

                                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="relative w-50">
                    <input type="search" class="px-2 w-full h-8 px-7" placeholder="Placeholder">

                    
                    <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none text-icon-02 dark:text-icon-03-dark">
                        <svg role="img" class="icon icon-mono icon-search text-current"><use xlink:href="icons/mono/icons-mono.svg#icon-search"></use></svg>
                    </div>
                    
    
                    
                    <button type="button" class="absolute top-1/2 right-2 flex items-center text-icon-02 w-4 h-4 transform -translate-y-2 leading-none p-0 align-middle transition-none dark:text-icon-03-dark hidden">
                        <svg role="img" class="icon icon-mono icon-x text-current align-middle"><use xlink:href="icons/mono/icons-mono.svg#icon-x"></use></svg>
                    </button>
                    

                    
                </div>

                <button type="button" class="
                    px-small h-8 text-button-upper font-semibold rounded-sm inline-flex justify-center items-center border bg-interactive-01 text-text-04 border-interactive-01
                    hover:bg-hover-primary hover:border-hover-primary
                    active:bg-active-primary active:border-active-primary
                    disabled:bg-ui-01 disabled:text-disabled-03 disabled:border-disabled-02
                    
                    ">

                    

                    <span>CREATE PROJECT</span>

                    
                </button>
            </div>
        </div>
        <div class="flex items-center space-x-5 mb-8">
            <label class="select-control pl-6">
                <input type="radio" class="hidden">
                <svg role="img" class="icon icon-mono icon-radio left-0"><use xlink:href="icons/mono/icons-mono.svg#icon-radio"></use></svg>
                <svg role="img" class="icon icon-mono icon-radio-checked left-0"><use xlink:href="icons/mono/icons-mono.svg#icon-radio-checked"></use></svg>
                
                <span class="text-button-upper font-semibold text-text-03">SELECT ALL</span>
            </label>

            <button type="button" class="
                @@size rounded-sm inline-flex justify-center items-center text-text-03
                hover:text-hover-primary
                active:text-active-primary
                disabled:text-disabled-03
                text-button-upper uppercase font-semibold
                ">

                
                <svg role="img" class="icon icon-mono icon-trash transition-none mr-1"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                

                <span>Delete</span>

                
            </button>
            
            <button type="button" class="
                @@size rounded-sm inline-flex justify-center items-center text-text-03
                hover:text-hover-primary
                active:text-active-primary
                disabled:text-disabled-03
                text-button-upper uppercase font-semibold
                ">

                
                <svg role="img" class="icon icon-mono icon-folder-arrow transition-none mr-1"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                

                <span>Move</span>

                
            </button>
        </div>

        <div class="grid grid-cols-4 gap-5 mb-8">
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="assets/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="assets/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="assets/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="assets/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="assets/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="assets/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="assets/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
                
                
                <label class="checkable relative w-full rounded bg-ui-01 border border-ui-04 hover:border-hover-primary group transition-all">
                    <input type="checkbox" class="absolute invisible">

                    <svg role="img" class="icon icon-mono icon-circle w-6 h-6 text-icon-02 absolute top-2 right-2 opacity-0 group-hover:opacity-100"><use xlink:href="icons/mono/icons-mono.svg#icon-circle"></use></svg>
                    <svg role="img" class="icon icon-mono icon-check-circle-solid w-6 h-6 text-icon-primary-01 absolute top-2 right-2 opacity-0"><use xlink:href="icons/mono/icons-mono.svg#icon-check-circle-solid"></use></svg>
                

                    <div class="relative p-4 flex justify-center items-center">
                        <img src="https://source.unsplash.com/APNnyM36puU/172x104/" alt="">
                        
                    </div>

                    <div class="p-4 border-t border-ui-04 relative pr-10">
                        <div class="flex items-center mb-1">
                            
                            <h4 class="font-semibold text-body-01 truncate">Retargetting Ads</h4>
                        </div>
                        <p class="text-body-small-01 text-text-02">800x960 | Edited 5 mins ago</p>

                        <div class="dropdown absolute top-1/2 transform -translate-y-1/2 right-4">
                            <button type="button" class="dropdown__trigger group" data-toggle="dropdown">
                                <svg role="img" class="icon icon-mono icon-dots w-6 h-6 text-icon-02"><use xlink:href="icons/mono/icons-mono.svg#icon-dots"></use></svg>
                            </button>

                            

                            

                            

                            
                            <div class="dropdown__menu dropdown__menu--right mb-2 w-[152px] divide-y divide-ui-04 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-bg-remover w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-bg-remover"></use></svg>
                                        <span class="mb-0">Remove BG</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-tag w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-tag"></use></svg>
                                        <span class="mb-0">Add tags</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-duo icon-brand w-4 h-4 mr-2"><use xlink:href="assets/icons-duo.svg#icon-brand"></use></svg>
                                        <span class="mb-0">Save to brand kit</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-folder-arrow w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-folder-arrow"></use></svg>
                                        <span class="mb-0">Move</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-download w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-download"></use></svg>
                                        <span class="mb-0">Download</span>
                                    </a>
                                    <a href="#!" class="listitem w-full border-0 px-3 h-8 text-body-small-01 hover:bg-active-ui hover:text-text-primary-01">
                                        <svg role="img" class="icon icon-mono icon-trash w-4 h-4 mr-2"><use xlink:href="icons/mono/icons-mono.svg#icon-trash"></use></svg>
                                        <span class="mb-0">Delete</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </label>
                
                
            
        </div>

        <nav class="flex" aria-label="Pagination">
            <button type="button" class="
                px-small py-0.5 h-8 text-button-upper font-semibold rounded-sm inline-flex justify-center items-center border bg-ui-01 text-text-primary-01 border-ui-04
                hover:border-hover-primary
                active:bg-active-primary active:text-text-04
                disabled:bg-ui-01 disabled:text-disabled-03 disabled:border-disabled-02
                mr-3
                " disabled="">

                

                <span>PREV</span>

                
            </button>

            <div class="rounded flex text-caption-01 font-semibold h-8 overflow-hidden">
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-04 bg-interactive-01">1</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">2</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">3</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">4</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">5</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">6</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">7</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">8</a>
                <a href="#!" class="flex justify-center items-center w-8 h-8 text-center text-text-03 bg-ui-01 hover:bg-hover-ui hover:text-text-primary-01">9</a>
            </div>

            <button type="button" class="
                px-small py-xxsmall text-button-upper font-semibold rounded-sm inline-flex justify-center items-center border bg-ui-01 text-text-primary-01 border-ui-04
                hover:border-hover-primary
                active:bg-active-primary active:text-text-04
                disabled:bg-ui-01 disabled:text-disabled-03 disabled:border-disabled-02
                ml-3
                ">

                

                <span>NEXT</span>

                
            </button>
        </nav>

        <div class="flex justify-center  bg-interactive-04 text-text-04  shadow-small rounded px-3 py-2 text-body-small-01 z-30 w-1/2 fixed left-1/2 bottom-8 transform -translate-x-1/2 z-50 ml-[122px]">
            

            <p class="my-0">“Reatargeting ads” was moved to “Home”</p>

            
        </div>
    </main>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- <script src="../../../node_modules/svg4everybody/dist/svg4everybody.min.js"></script> -->

	<!-- Custom scrollbar -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script> -->

	<!-- Slick Carousel -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
	<script src="js/init.js"></script>

</body>
</html>