<h3>version 0.3</h3>
<br>
<h5>Backend only. Requires input from client end to run.</h5>
<br>
This repository handles all queries to the postgres database through PHP, informing various features including D3 heatmaps, plotly.js violin plots, and a custom D3 based exon plot.
<br>
In its current version, code will connect to the database and output expected results.
<br>
The directory system is supplementary, and is updated based on what iteration of the database is currently in use. For this reason, it is likely to be moved to the oncobuild repository, and the corresponding PHP code you find here will need some minor changes as well.