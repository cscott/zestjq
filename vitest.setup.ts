// Registers JQTopLevelEnv as the native-builtin factory for JQLazyEnv.
// This must run before any test that calls JQEnv.getStdEnv().
import './lib/JQTopLevelEnv.js';
