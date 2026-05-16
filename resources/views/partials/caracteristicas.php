<?php

$c = $s->caracteristicas;

$AFOR = $c->AFOR ?? 0;
$ADES = $c->ADES ?? 0;
$ACON = $c->ACON ?? 0;
$AINT = $c->AINT ?? 0;
$APER = $c->APER ?? 0;
$AVON = $c->AVON ?? 0;

$PAMB = $c->PAMB ?? 0;
$PAMF = $c->PAMF ?? 0;
$PACR = $c->PACR ?? 0;
$PATL = $c->PATL ?? 0;
$PBRI = $c->PBRI ?? 0;
$PESQ = $c->PESQ ?? 0;
$PFUR = $c->PFUR ?? 0;

$PART = $c->PART ?? 0;
$PCOC = $c->PCOC ?? 0;
$PCOD = $c->PCOD ?? 0;
$PEPL = $c->PEPL ?? 0;
$PINV = $c->PINV ?? 0;
$PLAD = $c->PLAD ?? 0;
$PPRS = $c->PPRS ?? 0;

$PCAC = $c->PCAC ?? 0;
$PCIN = $c->PCIN ?? 0;
$PCME = $c->PCME ?? 0;
$PCMA = $c->PCMA ?? 0;
$PCMI = $c->PCMI ?? 0;
$PCPO = $c->PCPO ?? 0;

$PBLE = $c->PBLE ?? 0;
$PCRI = $c->PCRI ?? 0;
$PDIP = $c->PDIP ?? 0;
$PTIM = $c->PTIM ?? 0;
$PTUI = $c->PTUI ?? 0;
$PLID = $c->PLID ?? 0;

$QARM = $c->QARM ?? 0;
$QBEL = $c->QBEL ?? 0;
$QCOR = $c->QCOR ?? 0;
$QCAS = $c->QCAS ?? 0;
$QDDM = $c->QDDM ?? 0;
$QBRX = $c->QBRX ?? 0;
$QGEL = $c->QGEL ?? 0;
$QGEN = $c->QGEN ?? 0;
$QTRA = $c->QTRA ?? 0;
$QSEA = $c->QSEA ?? 0;
$QADA = $c->QADA ?? 0;
$QFDA = $c->QFDA ?? 0;
$QJDP = $c->QJDP ?? 0;
$QLAB = $c->QLAB ?? 0;
$QMAL = $c->QMAL ?? 0;
$QCNH = $c->QCNH ?? 0;
$QMMF = $c->QMMF ?? 0;

$DANT = $c->DANT ?? 0;
$DAZA = $c->DAZA ?? 0;
$DFEI = $c->DFEI ?? 0;
$DPCR = $c->DPCR ?? 0;
$DCOV = $c->DCOV ?? 0;
$DCRE = $c->DCRE ?? 0;
$DMDS = $c->DMDS ?? 0;
$DPSI = $c->DPSI ?? 0;
$DPSE = $c->DPSE ?? 0;
$DPRE = $c->DPRE ?? 0;
$DPRO = $c->DPRO ?? 0;
$DTDA = $c->DTDA ?? 0;
$DIRR = $c->DIRR ?? 0;
$DSNO = $c->DSNO ?? 0;
$DPLH = $c->DPLH ?? 0;
$DVRU = $c->DVRU ?? 0;

$AFORLvl6 = 0; $ADESLvl6 = 0; $ACONLvl6 = 0; $AINTLvl6 = 0; $APERLvl6 = 0; $AVONLvl6 = 0;

if ($AFOR == 0) { $AFOR = 1; }
if ($AFOR == 6) { $AFORLvl6 = 2; }

if ($ADES == 0) { $ADES = 1; }
if ($ADES == 6) { $ADESLvl6 = 2; }

if ($ACON == 0) { $ACON = 1; }
if ($ACON == 6) { $ACONLvl6 = 2; }

if ($AINT == 0) { $AINT = 1; }
if ($AINT == 6) { $AINTLvl6 = 2; }

if ($APER == 0) { $APER = 1; }
if ($APER == 6) { $APERLvl6 = 2; }

if ($AVON == 0) { $AVON = 1; }
if ($AVON == 6) { $AVONLvl6 = 2; }

$ASPV = ($AFOR + $ACON) * 4 + 10 + (2 * $QDDM);
$ASVE = ($ADES + $ACON) * 2;
$ASCC = ($AFOR + $ACON) * 2;
$ASRE = 15 + $AFORLvl6 + $ADESLvl6 + $ACONLvl6 + $AINTLvl6 + $APERLvl6 + $AVONLvl6;