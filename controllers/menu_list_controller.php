<?php
                include("model/bd.php");
                $sql = $conexion ->query("SELECT * FROM posts");
                while($datos=$sql->fetchObject())
                { ?>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title"><?= $datos ->title ?></h2>
                            <h3 class="post-subtitle"><?= $datos ->subtitle ?></h3>
                        </a>
                        <p class="post-meta">
                            Posted by <?= $datos ->author ?>
                            on 
                            <?= $datos ->date ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php }  
                    $conexion = null;
                        ?>