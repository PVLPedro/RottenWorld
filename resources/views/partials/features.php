<?php

$AFOR = $s->AFOR ?? 0;
$ADES = $s->ADES ?? 0;
$ACON = $s->ACON ?? 0;
$AINT = $s->AINT ?? 0;
$APER = $s->APER ?? 0;
$AVON = $s->AVON ?? 0;

$PAMB = $s->PAMB ?? 0;
$PAMF = $s->PAMF ?? 0;
$PACR = $s->PACR ?? 0;
$PATL = $s->PATL ?? 0;
$PBRI = $s->PBRI ?? 0;
$PESQ = $s->PESQ ?? 0;
$PFUR = $s->PFUR ?? 0;

$PART = $s->PART ?? 0;
$PCOC = $s->PCOC ?? 0;
$PCOD = $s->PCOD ?? 0;
$PEPL = $s->PEPL ?? 0;
$PINV = $s->PINV ?? 0;
$PLAD = $s->PLAD ?? 0;
$PPRS = $s->PPRS ?? 0;

$PCAC = $s->PCAC ?? 0;
$PCIN = $s->PCIN ?? 0;
$PCME = $s->PCME ?? 0;
$PCMA = $s->PCMA ?? 0;
$PCMI = $s->PCMI ?? 0;
$PCPO = $s->PCPO ?? 0;

$PBLE = $s->PBLE ?? 0;
$PCRI = $s->PCRI ?? 0;
$PDIP = $s->PDIP ?? 0;
$PTIM = $s->PTIM ?? 0;
$PTUI = $s->PTUI ?? 0;
$PLID = $s->PLID ?? 0;

$QARM = $s->QARM ?? 0;
$QBEL = $s->QBEL ?? 0;
$QCOR = $s->QCOR ?? 0;
$QCAS = $s->QCAS ?? 0;
$QDDM = $s->QDDM ?? 0;
$QBRX = $s->QBRX ?? 0;
$QGEL = $s->QGEL ?? 0;
$QGEN = $s->QGEN ?? 0;
$QTRA = $s->QTRA ?? 0;
$QSEA = $s->QSEA ?? 0;
$QADA = $s->QADA ?? 0;
$QFDA = $s->QFDA ?? 0;
$QJDP = $s->QJDP ?? 0;
$QLAB = $s->QLAB ?? 0;
$QMAL = $s->QMAL ?? 0;
$QCNH = $s->QCNH ?? 0;
$QMMF = $s->QMMF ?? 0;

$DANT = $s->DANT ?? 0;
$DAZA = $s->DAZA ?? 0;
$DFEI = $s->DFEI ?? 0;
$DPCR = $s->DPCR ?? 0;
$DCOV = $s->DCOV ?? 0;
$DCRE = $s->DCRE ?? 0;
$DMDS = $s->DMDS ?? 0;
$DPSI = $s->DPSI ?? 0;
$DPSE = $s->DPSE ?? 0;
$DPRE = $s->DPRE ?? 0;
$DPRO = $s->DPRO ?? 0;
$DTDA = $s->DTDA ?? 0;
$DIRR = $s->DIRR ?? 0;
$DSNO = $s->DSNO ?? 0;
$DPLH = $s->DPLH ?? 0;
$DVRU = $s->DVRU ?? 0;

$A = [

    'AFOR' => $s->AFOR ?? 0,
    'ADES' => $s->ADES ?? 0,
    'ACON' => $s->ACON ?? 0,
    'AINT' => $s->AINT ?? 0,
    'APER' => $s->APER ?? 0,
    'AVON' => $s->AVON ?? 0,

];

$Acalc = [];
$Lvl6 = [];

foreach ($A as $key => $value)
{
    $Acalc[$key] = max($value, 1);

    $Lvl6[$key] = ($value > 5)
        ? 2
        : 0;
}

$ASPV =
(
    ($Acalc['AFOR'] + $Acalc['ACON']) * 4
    +
    ($Acalc['AVON'] + ($s->QDDM ?? 0)) * 2
    +
    16
);

$ASVE =
(
    ($Acalc['ADES'] * 3)
    +
    ($Acalc['ACON'] * 2)
);

$ASCC =
(
    ($Acalc['AFOR'] + $Acalc['ACON']) * 2
);

$ASRE =
    18
    +
    array_sum($Lvl6);