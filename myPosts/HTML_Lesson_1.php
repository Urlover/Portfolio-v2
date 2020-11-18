<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="A quick demonstration of some of the HTML basics and how to apply them to an HTML document.">
    <!-- Header file -->
    <?php include("../head.php"); ?>
    <title>Jonah Louis | HTML Basics</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Navigation bar -->
        <?php include("../layout/nav.php"); ?>

        <!-- Content Area --> 
        <div class="container-sm">
            <!-- Intro section --> 
            <div class="c-intro">
                <h1 class="uni-mainHeader">Getting Started with the HTML Basics</h1>
            </div>
            <!-- Top of section -->
            <div class="posts-top">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">HTML Basics</li>
                    </ol>
                </nav>
            </div>


            <!-- Content section #1 - Objective and end goal -->
            <div class="posts-content">
                <h5>Objective</h5>
                <p>Learning some of the fundamentals in HTML and applying it to replicate my Demo.</p>
                <h5>Important reference:</h5>
                <p>Majority of the content explained originates from <a href="https://www.w3schools.com/html/default.asp" target="_blank">w3schools</a> but was condensed
                    and made into a single introduction so it can be easily followed.</p>
                <h5>Demo</h5>
                <p>By the end of the post & if you decided to follow along, your demo should look something like this:</p>
                <!-- Carousel -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/images/HTML_demo_preview_1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/images/HTML_demo_preview_2.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fas fa-long-arrow-alt-left fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fas fa-long-arrow-alt-right fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            </div>


            <!-- Content section #2 -->
            <div class="posts-content">
                <!-- Before steps -->
                <h4 class="uni-subHeader">Before we get started</h4>
                <p>You may be wondering what HTML is & what it can be used for.</p>
                <i class="fas fa-circle-notch posts-bullet-point"></i> HTML is acronym for Hyper Text Markup Language<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> HTML is the standard markup language for creating Web pages<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> HTML describes the structure of a Web page<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> HTML consists of a series of elements<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> HTML elements tell the browser how to display the content<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> HTML elements label pieces of content such as "this is a heading", "this is a paragraph",
                "this is a link"...<br />

                <!-- STEP 1-->
                <h4 class="uni-subHeader" id="posts-subHeader">1. Creating the HTML document</h4>
                <p>Assuming that you already have a text editor installed and a workspace in place, the first step is to create the HTML document.
                    The HTML document can be created in the text editor (as I did). Give it any name you'd like & make sure it ends with <code>.html</code>. 
                    Feel free to check the <a href="https://ed.fnal.gov/lincon/tech_web_naming.shtml" target="_blank">HTML naming guidelines</a> to make sure you give a valid 
                    name. It is to note that the conventional name for the "homepage" is usually <code>index.html</code>.
                </p>
                <h4 class="uni-subHeader2">1a. Create the file</h4>
                <p class="posts-text-above-image">HTML document being created in Visual Studio Code</p>
                <img src="/images/HTML_Basics_Step_1.png"  class="rounded img-fluid">

                <p class="posts-text-above-image">HTML Document given the name <code>HTML_Basics_1.html</code></p>
                <img src="/images/HTML_Basics_Step_2.png"  class="rounded img-fluid">

                <!-- STEP 2 -->
                <h4 class="uni-subHeader" id="posts-subHeader">2. Adding the HTML page structure </h4>
                <p>Add the following code to the file you created and make sure you save it:</p>
                <div class="code-block">
<!-- Weird spacing issue so I had to put this at the start -->
<pre><code>&lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
    &lt;title&gt;HTML Basics&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;h1&gt;Hello World!&lt;/h1&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                </div>

                <p>Expected Output: <samp class="output-correct">Hello World!</samp></p>
                <p>Congratulations! You just created an HTML document. Now all you have to do is open the HTML file you created. 
                    To do that, simply locate where you saved the file and double click it to open the file within your browser of choice. After doing so,
                    you should see the "Expected Output" as above. But it might not mean that much to you, so let me explain each line.</p>

                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;!DOCTYPE html&gt;</code> defines that the document you created is an HTML5 document<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;html&gt;</code> element is the root of an HTML page<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;head&gt;</code> element contains meta information about the HTML page. Example: The title of the page,
                or the language of the page.<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;title&gt;</code> element specifies the name of the HTML document on the page (shown in browser title bar)<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;body&gt;</code> element defines the document's body, and is used for visible contents (like the heading "
                Hello World" in our case).<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;h1&gt;</code> element defines a large heading<br />
                <!-- STEP 2a -->
                <h4 class="uni-subHeader2">2a. What is an HTML element</h4>
                <p>A html element has a starting tag, content in between, and then an end tag.  Example:</p>
                <code>&lt;tagname&gt;Content here&lt;/tagname&gt;</code><br><br>
                <p>
                    There's a variety of elements that all hold a specific purpose. We will take a look and use them later, but for now let's look at another example.
                    In the code we created, we have <code>&lt;!DOCTYPE html&gt;</code> which has everything inside of it. This means that
                    for <code>&lt;!DOCTYPE html&gt;</code>, its content is everything in between.
                </p>

                <!-- STEP 3 -->
                <h4 class="uni-subHeader" id="posts-subHeader">3. Adding more elements to the HTML page</h4>
                <p>Now we're going to add more elements to our HTML page in order to show you some of the different options. 
                    If you're following along, please add the code demonstrated at the start of each sub section to the code we created at step 2. Make sure you add
                    everything <b>inside the body element.</b></p>
                <!-- Sub section 3a -->    
                <h4 class="uni-subHeader2">3a. Paragraphs</h4>
                <code>&lt;p&gt;Add some text here&lt;/p&gt;</code>
                <br><br>
                <p>
                    The &lt;p&gt; tag defines an HTML paragraph. Any text can be added in between. Adding extra lines or spaces won't change the result of the paragraph tag. 
                    If you want to add a line break, you will need to use the &lt;br&gt; tag. Example, using: <code>&lt;p&gt;Add&lt;br&gt;text&lt;br&gt;here&lt;/p&gt;</code> 
                    will make all 3 words appear on a different line.
                </p>
                
                <!-- Sub section 3b -->   
                <h4 class="uni-subHeader2">3b. Links</h4>
                <code>&lt;a href="https://www.jonahlouis.ca">View a cool website&gt;&lt;/a&gt;</code>
                <br><br>
                <p>
                    The &lt;a&gt; tag defines an HTML link. href is an attribute used for the link which references the URL (we take a look at attributes below). 
                    In between the &lt;a&gt; and &lt;/a&gt; tag, we add text which will display instead of the URL.
                    <br><br>
                    There are two ways to reference a URL.
                    <br>
                    <b>1. Absolute URL</b><br>
                    With a full web address (just like we did above).<br>
                    <code>&lt;a href="https://www.jonahlouis.ca">View a cool website&gt;&lt;/a&gt;</code><br>
                    <br>
                    <b>2. Relative URL</b><br>
                    With a local address/local file.<br>
                    <code>&lt;a href="page2.html">View my second page&gt;&lt;/a&gt;</code>
                </p>

                <!-- Sub section 3c -->  
                <h4 class="uni-subHeader2">3c. Images</h4>
                <code>&lt;img src="https://media.vanityfair.com/photos/5eb06b3ec135d48f5b12097d/master/w_2560%2Cc_limit/baby-yoda-craze.jpg"&gt;</code>
                <br><br>
                <p>
                The &lt;img&gt; tag defines an HTML image. Just like how links have an absolute or relative reference, the same goes with the image src attribute.
                You can either point the src to an image located on the internet (like I did) or you can point it to a local file.
                </p>
                <!-- Sub section 3d --> 
                <h4 class="uni-subHeader2">3e. Tables</h4>
                <div class="code-block">
<!-- Weird spacing issue so I had to put this at the start -->
<pre><code>&lt;table&gt;
    &lt;tr&gt;
    &lt;th&gt;ID&lt;/th&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td&gt;Jonah&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
</code></pre>
                </div>
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;table&gt;</code> tag defines an HTML table<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;tr&gt;</code> tag defines an HTML table row<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;th&gt;</code> tag defines an HTML table header. Bold and centered by default<br />
                <i class="fas fa-circle-notch posts-bullet-point"></i> <code>&lt;td&gt;</code> tag defines an HTML table cell. Regular font weight and left aligned<br />

                <!-- STEP 4 -->
                <h4 class="uni-subHeader" id="posts-subHeader">4. Nesting elements</h4>
                <h4 class="uni-subHeader2">Working on it...</h4>

                <!-- STEP 5 -->
                <h4 class="uni-subHeader" id="posts-subHeader">4. Attributes</h4>
                <h4 class="uni-subHeader2">Working on it...</h4>

                <!-- STEP 6 -->
                <h4 class="uni-subHeader" id="posts-subHeader">6. Styling elements</h4>
                <h4 class="uni-subHeader2">Working on it...</h4>

                <!-- STEP 7 -->
                <h4 class="uni-subHeader" id="posts-subHeader">7. Requirements for demo</h4>
                <h4 class="uni-subHeader2">7a. Create two HTML pages</h4>
                <p> <code>index.html</code></p>
                <ul>
                    <li>Title in title bar</li>
                    <li>Main title header</li>
                    <li>Link to page 2</li>
                    <li>Section for "About Me" with title, list, and image</li>
                    <li>Section with a title and a paragraph with spacing. Use nested elements in the paragraph for bolding..etc</li>
                </ul>
                <p> <code>page2.html</code></p>
                <ul>
                    <li>Title in title bar</li>
                    <li>Main title header</li>
                    <li>Link back to index</li>
                    <li>Html table with html styling</li>
                </ul>
                <p>Use my demo as reference if necessary. Thank you for reading, have a wonderful day!</p>
            </div> <!-- end of posts content -->
        </div> <!-- End of content area ->
    <!-- Footer -->
    <?php include("../layout/footer.php"); ?>
    </div> <!-- End of page wrapper -->
</body>
</html>