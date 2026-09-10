<title>SlashCo.LobbyData</title>
<structure>
	<realm>Shared</realm>
	<description>
		A table holding all state for the currently running Lobby, reset by <page>SlashCo.ResetLobbyData</page> whenever the Lobby restarts.
	</description>
	<fields>
		<item name="LOBBYSTATE" type="number" default="0">Internal progress step of the Lobby sequence (readying up, picking a Slasher, briefing, entering the helicopter, etc.).</item>
		<item name="Offering" type="number" default="0">ID of the currently selected <page>Offering</page>, or `0` if none is selected.</item>
		<item name="VotedOffering" type="number" default="0">ID of the Offering the current vote is deciding on.</item>
		<item name="ButtonDoorPrimary" type="Entity" default="NULL">The Lobby's primary item-room door button.</item>
		<item name="ButtonDoorPrimaryClose" type="Entity" default="NULL">The button that closes the primary item-room door.</item>
		<item name="ButtonDoorSecondary" type="Entity" default="NULL">The Lobby's secondary item-room door button.</item>
		<item name="ButtonDoorSecondaryClose" type="Entity" default="NULL">The button that closes the secondary item-room door.</item>
		<item name="ButtonDoorItems" type="Entity" default="NULL">The button that opens the item vendor room.</item>
		<item name="Players" type="table" default="{}">Table of players in the Lobby, keyed by player, with their current <page>SlashCo.ReadyState</page> as the value.</item>
		<item name="Offerors" type="table" default="{}">Set of players who have offered to pick the current Offering.</item>
		<item name="ReadyTimerStarted" type="boolean" default="false">Whether the countdown to leave the Lobby has already been started.</item>
		<item name="PotentialSurvivors" type="table" default="{}">Players who readied up as Survivor.</item>
		<item name="PotentialSlashers" type="table" default="{}">Players who readied up as Slasher.</item>
		<item name="NonPickedPotentialSlashers" type="table" default="{}">Players who wanted to be Slasher but weren't picked once Slashers were assigned - they remain Survivors for the round.</item>
		<item name="AssignedSurvivors" type="table" default="{}">Players that were finally assigned the Survivor role.</item>
		<item name="AssignedSlashers" type="table" default="{}">Players that were finally assigned the Slasher role.</item>
		<item name="FinishedPicking" type="boolean" default="false">Whether roles have already been assigned for this Lobby.</item>
		<item name="SelectedDifficulty" type="number" default="SlashCo.DifficultyLevel.EASY">The round <page>SlashCo.DifficultyLevel</page> selected for the upcoming round.</item>
		<item name="SurvivorGasMod" type="number" default="0">Extra/fewer gas cans to spawn, accumulated from the selected Offering.</item>
		<item name="SelectedSlasherInfo" type="table">
			Info about the Slasher that will be used for the round's briefing screen, with the fields `ID`, `CLASS`, `DANGER`, `NAME` and `TIP`.
		</item>
		<item name="SelectedMap" type="string" default="sc_summercamp">The map that will be loaded once the Lobby finishes.</item>
	</fields>
</structure>