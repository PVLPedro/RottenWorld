<?php

$c = $s->caracteristicas;

$AFOR = $c->AFOR ?? 0;
$ADES = $c->ADES ?? 0;
$ACON = $c->ACON ?? 0;
$AINT = $c->AINT ?? 0;
$APER = $c->APER ?? 0;
$AVON = $c->AVON ?? 0;
$QDDM = $c->QDDM ?? 0;

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
$ASVE = ($ADES + $ACON) * 2 + $AFOR;
$ASCC = ($AFOR + $ACON) * 2;
$ASRE = 15 + $AFORLvl6 + $ADESLvl6 + $ACONLvl6 + $AINTLvl6 + $APERLvl6 + $AVONLvl6;