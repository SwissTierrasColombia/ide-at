# módulo ide-at

```sh
drupal generate:module
```

# plugin block
```sh
drupal generate:plugin:block
```

## ejemplo:
```sh
root@0991a43e5564:/var/www/html# drupal generate:module

 // Welcome to the Drupal module generator

 Enter the new module name:
 > ^C
root@0991a43e5564:/var/www/html# drupal generate:plugin:block

 // Welcome to the Drupal Plugin Block generator
 Enter the module name [devel]:
 > ide_at

 Enter the plugin class name [DefaultBlock]:
 > LeyendaICDEBlock

 Enter the plugin label [Leyenda icdeblock]:
 > Leyenda ICDE Block

 Enter the plugin id [leyenda_icdeblock]:
 >

 Enter the theme region to render the Plugin Block. []:
 >

 Do you want to load services from the container? (yes/no) [no]:
 >


You can add input fields to create special configurations in the block.
This is optional, press enter to continue
 Do you want to generate a form structure? (yes/no) [yes]:
 > yes

Available types: button, checkbox, checkboxes, color, date, datelist, datetime, email, entity_autocomplete, field_ui_table, fieldset, file, hidden, image_button, item, language_configuration, language_select, machine_name, managed_file, number, password, password_confirm, path, radio, radios, range, search, select, submit, table, tableselect, tel, text_format, textarea, textfield, token, url, value, weight

 Enter a new field properties

 New field type (press <return> to stop adding fields) []:
 > textarea

 Input label:
 > Texto

 Input machine name [texto]:
 >

 Description []:
 > Texto con la leyenda de ICDE

 Default value []:
 > La Infraestructura Colombiana de Datos Espaciales (ICDE) tiene como objetivo la construcción e implementación colectiva de políticas que faciliten los procesos de gestión de los recursos geográficos, incluyendo datos, información y conocimiento, como sustento de la Gobernanza y la toma de decisiones. En el marco de la IDE-AT, debe fungir su rol de coordinación y armonización del gobierno geoespacial definiendo acciones encaminadas al desarrollo de estrategias para promover la creación de otras IDE y fortalecer existentes.

 Weight for input item [0]:
 >


 Enter a new field properties

 New field type (press <return> to stop adding fields) []:
 >

 Do you want proceed with the operation? (yes/no) [yes]:
 >


 // cache:rebuild

 Rebuilding cache(s), wait a moment please.


 [OK] Done clearing cache(s).                                                   


Generated or updated files
 Generation path: /var/www/html
 1 - sites/default/modules/ide_at/src/Plugin/Block/LeyendaICDEBlock.php


 Generated lines: "59"                                                          




 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               



 [ERROR] <em class="placeholder">Warning</em>: array_flip(): Can only flip      
         STRING and INTEGER values! in <em                                      
         class="placeholder">Drupal\Console\Core\Style\DrupalStyle-&gt;choiceNoL
         ist()</em> (line <em class="placeholder">62</em> of <em                
         class="placeholder">vendor/drupal/console-core/src/Style/DrupalStyle.ph
         p</em>).                                                               


root@0991a43e5564:/var/www/html#
```

## Referencias
- https://hechoendrupal.gitbooks.io/drupal-console/content/es/commands/generate-plugin-block.html
