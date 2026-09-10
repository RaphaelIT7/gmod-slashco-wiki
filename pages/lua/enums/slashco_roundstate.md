<title>SlashCo.RoundState</title>
<enum>
	<realm>Shared</realm>
	<description>
		Describes how a finished round ended. Passed to <page>SlashCo.RoundOverScreen</page> to decide which end-of-round screen and message to show.
	</description>
	<items>
		<item key="SlashCo.RoundState.WON_ALL_ALIVE" value="0">Survivors escaped with everyone alive.</item>
		<item key="SlashCo.RoundState.WON_SOME_DEAD" value="1">Survivors escaped, but some of them died.</item>
		<item key="SlashCo.RoundState.WON_ALL_DEAD" value="2">The helicopter escaped, but every Survivor died.</item>
		<item key="SlashCo.RoundState.LOST" value="3">The Survivors lost the round.</item>
		<item key="SlashCo.RoundState.WON_DISTRESS" value="4">Survivors were rescued using the distress beacon.</item>
		<item key="SlashCo.RoundState.CURSED" value="5">The round ended due to a curse (e.g. the Jug item's curse teleport chain).</item>
		<item key="SlashCo.RoundState.INTRO" value="6">Used while the round's intro sequence is still playing.</item>
	</items>
</enum>