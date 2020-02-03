<?php

$target = 'penkTadIeNis';

switch (strtoupper($target)) {
  case 'PIRMADIENIS':
    print 'pirmadienis';
    break;
    case 'ANTRADIENIS':
      print 'antradienis';
      break;
      case 'TRECIADIENIS':
        print 'treciadienis';
        break;
        case 'KETVIRTADIENIS':
          print 'ketvirtadienis';
          break;
          case 'PENKTADIENIS':
            print 'penktadienis';
            break;
            case 'SESTADIENIS':
              print 'sestadienis';
              break;
              case 'SEKAMDIENIS':
                print 'sekmadienis';
                break;
  default:
    print 'nera tokios savaites dienos';
    break;
}
 ?>
