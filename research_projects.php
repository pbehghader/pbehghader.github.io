<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include 'analytics.php'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Your description goes here" />
        <meta name="keywords" content="your,keywords,goes,here" />
        <meta name="author" content="Pooyan Behnamghader" />
        <link rel="stylesheet" type="text/css" href="variant-light.css" title="Variant Light" media="screen,projection" />
        <link rel="icon" href="http://www.cs.usc.edu/favicon.ico" type="image/x-icon">
        <title>Publications</title>
    </head>

    <body>
        <?php include 'header.php'; ?>
        <?php include 'topmenu.php'; ?>
        <div id="wrap">
            <?php include 'sidebar.php'; ?>
            <div id="content">
                <div class="post">
                    <h2>Research Projects</h2>
                    
                    <div>
                        <h3>
                            ARCADE
                        </h3>
                            ARCADE is a software workbench that employs a suite of architecture recoverytechniques and metrics for different aspects of architectural change.
                            <br/>
                            Main contributions:
                            <ul>
                                <li>
                                    Improving ACDC architecture recovery technique.
                                </li>
                                <li>
                                    Improving ARC architecture recovery technique.
                                </li>
                                <li>
                                    Designing and implementing A2A and MTO architectural change metrics.
                                </li>
                            </ul>
                    </div>
                    <div>
                        <h3>
                            SoftEvo
                        </h3>
                            SoftEvo is a toolset to use cloud computing in order to semi-automatically run large-scale static and dynamic programming analyses on the history of systems in software repositories.
                            <br/>
                            Main contributions:
                            <ul>
                                <li>
                                    Designing and implementing SoftEvo.
                                </li>
                                <li>
                                    Implementing ARCADE's workflow based on SoftEvo.
                                </li>
                            </ul>
                    </div>
                     <div>
                        <h3>
                            FieryEye
                        </h3>
                            FieryEye is a novel automated framework for debugging web sites that is based 
                            on image processing and probabilistic techniques. FieryEye first builds a model
                            that links observable changes in the website’s appearance to faulty elements 
                            and styling properties. Then using this model, our approach predicts the elements and styling
                            properties most likely to cause the observed failure for the page
                            under test and reports these to the developer
                            <br/>
                            Main contributions:
                            <ul>
                                <li>
                                    Improving the efficiency of FieryEye by designing and implementing infrastructures to run it on cloud. 
                                </li>
                            </ul>
                    </div>
                    <div>
                        <h3>
                            Mahjong
                        </h3>
                            Mahjong is a distributed software system that uses idle cycles on remote but networked computers to solve NP-complete problems
                            <br/>
                            Main contributions:
                            <ul>
                                <li>
                                    Desinging and implementing infrastructure to run Mahjong on cloud.
                                </li>
                            </ul>
                    </div>
                    <div>
                        <h3>
                            RBPT
                        </h3>
                            Restricted Broadcast Process Theory (RBPT) was introduced for formal modeling and verification of Mobile Ad Hoc Networks (MANETs) in an algebraic way. In this project, a tool that checks the static semantics of a given specification was developed. Furthermore, it linearizes the algebraic specifications using the sound axioms of RBPT. 
                            <br/>
                           Main contributions:
                            <ul>
                                <li>
                                    Desinging and implementing the core engine of RBPT.
                                </li>
                                <li>
                                    Providing a state space generator for process terms of RBPT extended with abstract data types by translating the specifications to ML.
                                </li>
                            </ul>
                    </div>
                    <p class="justified">
                    (Updated January 2016)
                    </p>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
