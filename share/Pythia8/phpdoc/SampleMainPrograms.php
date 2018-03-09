<html>
<head>
<title>Sample Main Programs</title>
<link rel="stylesheet" type="text/css" href="pythia.css"/>
<link rel="shortcut icon" href="pythia32.gif"/>
</head>
<body>

<script language=javascript type=text/javascript>
function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target :((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text"))
{return false;}
}

document.onkeypress = stopRKey;
</script>
<?php
if($_POST['saved'] == 1) {
if($_POST['filepath'] != "files/") {
echo "<font color='red'>SETTINGS SAVED TO FILE</font><br/><br/>"; }
else {
echo "<font color='red'>NO FILE SELECTED YET.. PLEASE DO SO </font><a href='SaveSettings.php'>HERE</a><br/><br/>"; }
}
?>

<form method='post' action='SampleMainPrograms.php'>
 
<h2>Sample Main Programs</h2> 
 
Descriptions of available classes, methods and settings are all 
very good and useful. Ultimately they are necessary for you to 
be able to fine-tune your runs to the task at hand. To get going, 
however, nothing helps like having explicit examples to study. 
This is what is provided in the <code>examples</code> subdirectory, 
along with instructions how they should be run: 
<ul> 
 
<li><code>main00.cc</code> : does not exist, but it has been defined 
in the <code>Makefile</code>, so this name could be used for a simple 
first test run. </li> 
 
<li><code>main01.cc</code> : a simple study of the charged multiplicity 
for jet events at the LHC. (Brief example fitting on one slide.)</li> 
 
<li><code>main01.py</code> : a Python interface equivalent 
of <code>main01.cc</code>.</li> 
 
<li><code>main02.cc</code> : a simple study of the <i>pT</i> spectrum 
of Z bosons at the Tevatron. (Brief example fitting on one slide.)</li> 
 
<li><code>main03.cc</code> : a simple study of several different kinds 
of events, with the choice to be made in the <code>main03.cmnd</code> 
"cards file".</li> 
 
<li><code>main04.cc</code> : tests of cross sections, multiplicities and 
average transverse momenta for elastic, diffractive and nondiffractive 
topologies, using <code>main04.cmnd</code> to pick processes.</li> 
 
<li><code>main05.cc</code> : generation of QCD jet events at the LHC, 
with jet analysis using the <code>SlowJet</code> inclusive anti-<i>kT</i> 
sequential-recombination finder and the <code>CellJet</code> 
cone-jet finder.</li> 
 
<li><code>main06.cc</code> : generation of LEP1 hadronic events, i.e. 
<i>e^+e^- &rarr; gamma*/Z^0 &rarr; q qbar</i>, with charged multiplicity, 
sphericity, thrust and jet analysis.</li> 
 
<li><code>main07.cc</code> : set up a fictitious production process 
to a generic resonance, where you easily can compose your own list 
of (two-body) decay modes to a variety of final states. Also traces 
decay chains down to truly stable particles: gamma, e+-, p/pbar and 
neutrinos. Suitable for astroparticle applications, like neutralino 
pair annihilation, where cross sections are calculated separately 
in another program.</li> 
 
<li><code>main08.cc</code> : generation of the QCD jet cross section 
biased towards higher pT values, by two different techniques. 
Firstly, by splitting the run into subruns, each in its own <i>pT</i> 
bin, and adding the results properly reweighted. Two suboptions, with 
limits set either in the main program or by subrun specification in the 
<code>main08.cmnd</code> file. Secondly, by a continuous reweighting 
with a <i>pT^4</i> bias in the selection, compensated by a 
<i>1/pT^4</i> event weight. Also inclusion of soft processes is 
illustrated, with subruns and weighted events.</li> 
 
<li><code>main09.cc</code> : generation of two predetermined hard 
interactions in each event.</li> 
 
<li><code>main10.cc</code> : illustration how userHooks can be used 
interact directly with the event-generation process.</li> 
 
<li><code>main10.py</code> : a Python interface equivalent 
of <code>main10.cc</code>. Provides an example of how to derive PYTHIA 
classes in Python.</li> 
 
<li><code>main11.cc</code> : a study of top events, fed in from the 
Les Houches Event File <code>ttbar.lhe</code>, here generated by 
PYTHIA 6.4. This file currently only contains 100 events 
so as not to make the distributed PYTHIA package too big, and so serves 
mainly as a demonstration of the principles involved. </li> 
 
<li><code>main12.cc</code> : a more sophisticated variant of 
<code>main11.cc</code>, where two Les Houches Event Files 
(<code>ttbar.lhe</code> and <code>ttbar2.lhe</code>) successively 
are used as input. Also illustrating some other aspects, like the 
capability to mix in internally generated events.</li> 
 
<li><code>main13.cc</code> : a streamlined version of 
<code>main12.cc</code>, where two Les Houches Event Files 
(<code>ttbar.lhe</code> and <code>ttbar2.lhe</code>) successively 
are used as input in <code>main13.cmnd</code> file.</li> 
 
<li><code>main14.cc</code> : a systematic comparison of several 
cross section values with their corresponding values in PYTHIA 6.4, 
the latter available as a table in the code.</li> 
 
<li><code>main15.cc</code> : loop over several tries, either to redo 
B decays only or to redo the complete hadronization chain of an event. 
Since much of the generation process is only made once this is a way 
to increase efficiency.</li> 
 
<li><code>main16.cc</code> : put all user analysis code into a class 
of its own, separate from the main program; provide the "cards file" 
name as a command-line argument. Also exemplifies how Higgs mass, 
width and branching ratios can be set by hand.</li> 
 
<li><code>main17.cc</code> : shows (a) how to use UserHooks to 
regularize onium cross section for pT &rarr; 0, and (b) how decays 
could be handled externally.</li> 
 
<li><code>main18.cc</code> : shows how to write an event filter class, 
where you keep a vector of pointers to the subset of particles you 
want to study further. The event record itself remains unchanged.</li> 
 
<li><code>main19.cc</code> : use several instances of Pythia, one for 
signal events and others for a variable number of pileup and "beam-gas" 
events, combined into one common event record. Illustrates how new 
Pythia instances can copy existing settings and particle data.</li> 
 
<li><code>main20.cc</code> : shows how PYTHIA 8 can write a Les Houches 
Event File, using facilities potentially useful also for other programs 
to write an LHEF. See also <code>main64.cc</code>.</li> 
 
<li><code>main21.cc</code> : an example how a single particle or various 
parton-level configurations can be input directly for hadronization, 
without being tied to the full process-generation machinery, e.g. to 
study the hadronization of junction topologies. Can also be used for 
single-resonance decays, with showers.</li> 
 
<li><code>main22.cc</code> : shows how an external resonance can be 
implemented as a new class derived from a PYTHIA base class, and be 
used in an external process, both of them handed in for generation 
as with normal internal classes.</li> 
 
<li><code>main23.cc</code> : shows how to write external classes, 
derived from PYTHIA base classes, that can be handed to PYTHIA for 
internal generation. The MIXMAX random number generator is this 
way compared with the default PYTHIA one. Explicit implementations 
are included for the generation of external beam momentum spread 
and vertex location, and for a simple scaling external parton 
distribution set.</li> 
 
<li><code>main24.cc</code> : tests of internally implemented cross sections 
for Supersymmetric particle production, with SUSY spectrum defined in 
<code>cmssm.spc</code> and settings in <code>main24.cmnd</code>. For 
illustration, an alternative example spectrum is also 
available, <code>sps1aWithDecays.spc</code>, which contains a decay 
table in SLHA format.</li> 
 
<li><code>main25.cc</code> : input RPV-SUSY events from an LHEF file that 
contains an SLHA spectrum inside its header. The event file, 
<code>main25.lhe</code>, contains a sample events that 
illustrate how to arrange color tags in the presence of the 
color-space epsilon tensors that accompany baryon number violating 
event topologies. </li> 
 
<li><code>main26.cc</code> : test program for processes in scenarios 
with large extra dimensions or unparticles. </li> 
 
<li><code>main27.cc</code> : production of Kaluza-Klein <i>gamma/Z</i> 
states in TeV-sized extra dimensions. </li> 
 
<li><code>main28.cc</code> : production of long-lived R-hadrons, that 
are forced to decay at a separate vertices and possibly with changed 
momenta.</li> 
 
<li><code>main29.cc</code> : colour reconnection models studied for 
top production. Illustrates how to set up the user hooks in 
<code>include/Pythia8Plugins/ColourReconnectionHooks.h</code>, 
with several models not found in the standard PYTHIA library.</li> 
 
<li><code>main30.cc</code> : example how to create a tailormade 
copy of the ordinary event record, here with hard-process history 
tracing closer to the PYTHIA 6 conventions.</li> 
 
<li><code>main31.cc</code> : exemplifies an improved matching of 
parton showers to LHEF-style input based on the 
<?php $filepath = $_GET["filepath"];
echo "<a href='POWHEGMerging.php?filepath=".$filepath."' target='page'>";?>POWHEG approach</a>. 
The <code>main31.cmnd</code> allows to switch between several 
different matching options. It also allows to select input process, 
in this case either for the POWHEG-hvq program applied to top 
pair production [<a href="Bibliography.php#refCor10" target="page">Cor10</a>] or for QCD 2+3-jet events. The small 
samples of input events are stored in the <code>powheg-hvq.lhe</code> 
and <code>powheg-dijets.lhe</code> files, respectively. 
</li> 
 
<li><code>main32.cc</code> : exemplifies MLM merging, either in the 
ALPGEN variant or in the Madgraph one, and with input events either 
from ALPGEN or from Madgraph, with relevant control cards stored in 
<code>main32.cmnd</code>. See <?php $filepath = $_GET["filepath"];
echo "<a href='JetMatching.php?filepath=".$filepath."' target='page'>";?>Jet Matching</a> 
for further details. Traditionally the ALPGEN output is 
split into one file with events and another with parameters and cross 
sections (unlike in LHEF). Here a sample of <i>W + 3 jets</i> events 
is stored in <code>main32.unw</code> and the parameters to go with it 
in <code>main32_unw.par</code>. Madgraph events are taken from the 
<code>w+_production_lhc_2.lhe</code> file in this case. 
</li> 
 
<li><code>main33.cc</code> : demonstrates how to link the POWHEGBOX 
matrix element programs dynamically, bypassing the need for intermediate 
LHE files. Two special files are used in this option: 
<code>include/Pythia8Plugins/LHAPowheg.h</code> contains the 
LHAup class wrapper used to build the POWHEG plugin libraries, and 
<code>include/Pythia8Plugins/PowhegProcs.h</code> the simple class that 
facilitates loading the POWHEG plugins. In addition 
<code>main33.cmnd</code> contains the commands needed for POWHEGBOX 
to run the example. 
</li> 
 
<li><code>main34.cc</code> : demonstrates how Madgraph5_aMC@NLO can 
be run "from within" Pythia, making use of the <code>LHAupMadgraph</code> 
wrapper/interface of Madgraph5_aMC@NLO and the Pythia jet matching 
facilities.</li> 
 
<li><code>main34.py</code> : a Python interface equivalent 
of <code>main34.cc</code>. Demonstrates usage of a PYTHIA plugin 
within the Python interface.</li> 
 
<li><code>main35.cc</code> : demonstrates how to generate quarkonia 
events with the external HelacOnia package interfaced to Pythia, 
and compare results with the internal implementation.</li> 
 
<li><code>main36.cc</code> : demonstrates how to generate 
Deeply Inelastic Scattering events, e.g. in a HERA configuration.</li> 
 
<li><code>main37.cc</code> : shows how LHEF version 3.0 files can be 
read and used to fill several histograms of the same property, but with 
different event weights.</li> 
 
<li><code>main38.cc</code> : an extended version of <code>main37.cc</code>, 
where additionally it is shown how to extract many different kinds of 
LHEF version 3.0 information.</li> 
 
<li><code>main41.cc</code> : similar to <code>main01</code>, except that 
the event record is output in the HepMC event record format. Requires that 
HepMC is properly linked. Note that the <code>hepmcout41.dat</code> output 
file can become quite big; so no example is included in this 
distribution.</li> 
 
<li><code>main42.cc</code> : a streamlined version for the generation 
of events that are then stored in HepMC format, without any event 
analysis. That is, all physics studies will have to be done afterwards. 
The name of the input "cards file" (e.g. <code>main42.cmnd</code>) 
and output HepMC event file (e.g. <code>hepmcout42.dat</code>) are to 
be provided as command-line arguments. Requires that HepMC is properly 
linked. Note that the HepMC output file can become quite big; so no 
example is included in this distribution.</li> 
 
<li><code>main43.cc</code> : a further extension of <code>main42.cc</code>, 
where subruns are used to process several consecutive LHEF, 
as in <code>main13.cc</code>, with information stored e.g in 
<code>main43.cmnd</code>. Other comments as for <code>main42.cc</code>.</li> 
 
<li><code>main46.cc</code> : illustrated how the ProMC library 
can be used to store Pythia events in a compact format.</li> 
 
<li><code>main48.cc</code> : demonstrates how to use 
the <code>EvtGenDecays</code> class provided 
by <code>include/Pythia8Plugins/EvtGen.h</code> to perform decays 
with the <code>EvtGen</code> package. The <code>main48.cc</code> header 
contains special instructions how to configure PYTHIA for use with 
<code>EvtGen</code>.</li> 
 
<li><code>main51.cc</code> : a test of the shape of parton densities, 
as a check prior to using a given PDF set in a generator.  Requires 
that LHAPDF is properly linked.</li> 
 
<li><code>main52.cc</code> : compares the charged multiplicity 
distribution, and a few other minimum-bias physics aspects, between 
default PYTHIA PDF and another one. Requires that LHAPDF is properly 
linked.</li> 
 
<li><code>main53.cc</code> : tests the possibility to do backwards 
evolution from an incoming photon at the hard interaction. Requires 
that you link to a LHAPDF set that includes the photon PDF.</li> 
 
<li><code>main54.cc</code> : compares the internal and LHAPDF 
implementations of the NNPDF 2.3 QCD+QED sets, for results and for 
timing. Requires that LHAPDF is properly linked.</li> 
 
<li><code>main55.cc</code> : exemplifies how you can use the internal 
implementation of interpolation in an lhagrid1 .dat file, without linking 
LHAPDF6. Also illustrates the topical issue of associated event properties 
for an intermediate spinless resonance in 
<i>&gamma; + &gamma; &rarr; &gamma; + &gamma;</i> at 750 GeV.</li> 
 
<li><code>main61.cc</code> : exemplifies the generation of hard 
diffractive processes.</li> 
 
<li><code>main62.cc</code> : illustrates how a user hook can be made 
to steer the angular distribution selection in resonance decays. 
The prime example would be if LHEF input, e.g. from Madgraph, 
contains undecayed resonances with helicity information. These 
would then be decayed isotropically by PYTHIA, but this example 
shows how one could do better. Some input in <code>main62.cmnd</code>. 
</li> 
 
<li><code>main63.cc</code> : exemplifies how a user hook can be used 
to enhance the rate of rare emissions in the shower.</li> 
 
<li><code>main64.cc</code> : examplifies how LHEF version 3 events can 
be written on an external file.</li> 
 
<li><code>main69.cc</code> : examplifies how to generate all relevant 
contributions for charged particle spectra in photon-photon and 
photon-proton collisions. </li> 
 
<li><code>main70.cc</code> : examplifies how to provide an external 
photon flux for photo-production processes. </li> 
 
<li><code>main71.cc</code> : an example how the FastJet jet finding 
package can be linked to allow an analysis of the final state, 
in this case for a study of W + jet production.</li> 
 
<li><code>main72.cc</code> : a comparison of SlowJet and FastJet 
jet finding, showing that they find the same jets if run under 
identical conditions, in this case for QCD jets.</li> 
 
<li><code>main73.cc</code> : a comparison of jet properties on the 
parton and the hadron level, illustrating possibilities for larger 
control of which particles are used in the jet analyses.</li> 
 
<li><code>main74.cc</code> : exemplifies how to use one of the 
contributed add-ons to the FastJet package. In this case the 
modified Mass Drop Tagger is used to improve the mass reconstruction 
of a boosted hadronically decaying <i>Z^0</i>.</li> 
 
<li><code>main75.cc</code> : setup for Dark Matter production, where the 
visible jets are found with the FastJet package.</li> 
 
<li><code>main80.cc</code> : do CKKW-L merging with a merging scale 
defined in <i>kT</i>. Input is provided by the <code>main80.cmnd</code> 
file and input LHE files. Very basic and pedagogical setup, suitable 
for tutorials.</li> 
 
<li><code>main81.cc</code> : do CKKW-L merging with a merging scale 
defined in <i>kT</i>. Input is provided by the <code>main81.cmnd</code> 
file and the three data files <code>w+_production_lhc_0.lhe</code>, 
<code>w+_production_lhc_1.lhe</code> and <code>w+_production_lhc_2.lhe</code>. 
</li> 
 
<li><code>main82.cc</code> : do CKKW-L merging with a user-defined 
merging scale function. Input is provided by the <code>main82.cmnd</code> 
file and the three data files <code>w+_production_lhc_0.lhe</code>, 
<code>w+_production_lhc_1.lhe</code> and <code>w+_production_lhc_2.lhe</code>. 
</li> 
 
<li><code>main83.cc</code> : as <code>main82.cc</code> but with an 
additional cut on the lowest multiplicity allowed for the reclustered 
state. The same input as for <code>main82.cc</code> can be used. 
</li> 
 
<li><code>main84.cc</code> : do CKKW-L merging with output in such a way 
that it can be used in subsequent RIVET analyses. Input is provided by 
the <code>main84.cmnd</code> file and the three data files 
<code>w+_production_lhc_0.lhe</code>, <code>w+_production_lhc_1.lhe</code> 
and <code>w+_production_lhc_2.lhe</code>. 
</li> 
 
<li><code>main85.cc</code> : do CKKW-L merging, with HepMC event output. Input 
settings are provided by the <code>main85.cmnd</code> file. This example 
program allows the use of input Les Houches events that are regularised with 
only very minimal cuts, and on which Pythia itself should enforce the more 
restrictive merging scale cut. The example program can be used with the input 
files <code>w_production_tree_0.lhe</code>, 
<code>w_production_tree_1.lhe</code> and <code>w_production_tree_2.lhe</code>. 
</li> 
 
<li><code>main86.cc</code> : do unitarised ME+PS (UMEPS) merging, with HepMC 
event output. Input settings are provided by the <code>main86.cmnd</code> 
file. This example program allows the consistent use of input Les Houches 
events that are regularised with only very minimal cuts, similar to 
<code>main85.cc</code>. The example program can be used with the input files 
<code>w_production_tree_0.lhe</code>, <code>w_production_tree_1.lhe</code> 
and <code>w_production_tree_2.lhe</code>. 
The program will produce positively and negatively weighted events. 
See <?php $filepath = $_GET["filepath"];
echo "<a href='UMEPSMerging.php?filepath=".$filepath."' target='page'>";?>UMEPS Merging</a> for further details. 
</li> 
 
<li><code>main87.cc</code> : do NL<sup>3</sup> NLO merging, with inclusive 
NLO input, and with HepMC event output. Input settings are provided by 
the <code>main87.cmnd</code> file. This example program allows the consistent 
use of input Les Houches events that are regularised with only very minimal 
cuts, similar to <code>main85.cc</code>. The example program can be 
used with the tree-level input files <code>w_production_tree_0.lhe</code>, 
<code>w_production_tree_1.lhe</code>, <code>w_production_tree_2.lhe</code> and 
the inclusive POWHEG input files <code>w_production_powheg_0.lhe</code>, 
<code>w_production_powheg_1.lhe</code>. 
The program will produce positively and negatively weighted events. 
See <?php $filepath = $_GET["filepath"];
echo "<a href='NLOMerging.php?filepath=".$filepath."' target='page'>";?>NLO Merging</a> (NL<sup>3</sup> section) for 
further details. 
</li> 
 
<li><code>main88.cc</code> : do unitarised NLO+PS (UNLOPS) merging, with 
inclusive NLO input, and with HepMC event output. Input settings are provided 
by the <code>main88.cmnd</code> file. This example program allows the 
consistent use of input Les Houches events that are regularised with only very 
minimal cuts, similar to <code>main85.cc</code>. The example program can be 
used with the tree-level input files <code>w_production_tree_0.lhe</code>, 
<code>w_production_tree_1.lhe</code>, <code>w_production_tree_2.lhe</code> and 
the inclusive POWHEG input files <code>w_production_powheg_0.lhe</code>, 
<code>w_production_powheg_1.lhe</code>. 
The program will produce positively and negatively weighted events. 
See <?php $filepath = $_GET["filepath"];
echo "<a href='NLOMerging.php?filepath=".$filepath."' target='page'>";?>NLO Merging</a> (UNLOPS section) for further 
details. 
</li> 
 
<li><code>main89.cc</code> : do matching/merging according to five alternative 
methods, simply by choosing which <code>.cmnd</code> file to read: 
<code>main89ckkwl.cmnd</code> for CKKW-L, <code>main89fxfx.cmnd</code> 
for FxFx, <code>main89mlm.cmnd</code> for MLM, <code>main89umeps.cmnd</code> 
for UMEPS, and <code>main89unlops.cmnd</code> for UNLOPS. 
</li> 
 
<li><code>main91.cc</code> : shows how ROOT can be used for histogramming 
in a program that for the rest is structured like a normal PYTHIA run. 
</li> 
 
<li><code>main92.cc</code> : shows how PYTHIA events can be stored as 
ROOT trees.</li> 
 
<li><code>main101.cc</code> : shows how the string shoving mechanism, 
part of the rope hadronization framework, can be set up and used to 
generate ridge effects.</li> 
 
<li><code>main102.cc</code> : shows how flavour production is changed 
in the rope hadronization framework.</li> 
 
<li><code>main111.cc</code> : simple pp collisions as in 
<code>main01.cc</code>, but using the Angantyr model for Heavy Ion 
collisions. Also shows how Rivet analyses can be set up easily using 
a special interface.</li> 
 
<li><code>main112.cc</code> : p-Pb collisions at LHC energies, 
using the Angantyr model for Heavy Ion collisions, and analyzing 
events by centrality bins.</li> 
 
<li><code>main113.cc</code> : Pb-Pb collisions at LHC energies, 
using the Angantyr model for Heavy Ion collisions, and analyzing 
events by centrality bins.</li> 
 
<li><code>main121.cc</code> : set up automatic uncertainty band variations 
to PDFs and factorization and renormalization scales.</li> 
 
</ul> 
 
</body>
</html>
 
<!-- Copyright (C) 2017 Torbjorn Sjostrand --> 
