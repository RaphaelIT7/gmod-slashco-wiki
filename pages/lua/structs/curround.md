<title>SlashCo.CurRound</title>
<structure>
	<realm>Shared</realm>
	<description>
		A table holding all state for the currently running (or upcoming) round, reset by <page>SlashCo.ResetCurRoundData</page> at the start of every round.<br>
		<note>
			For backwards compatibility, reading/writing the field <page>SlashCo.CurRound#Helicopter</page> actually redirects to the entity index of `SlashCo.Helicopter`, and the old Offering field names `SO`/`DO`/`SatO` are redirected to `Singularity`/`Duality`/`Satiation` on <page>SlashCo.CurRound#OfferingData</page>.
		</note>
	</description>
	<fields>
		<item name="Difficulty" type="number" default="SlashCo.DifficultyLevel.EASY">The round's <page>SlashCo.DifficultyLevel</page>.</item>
		<item name="ExpectedPlayers" type="table" default="{}">SteamID64s of the players expected to load into the round.</item>
		<item name="DisconnectedPlayers" type="table" default="{}">Players that disconnected during the round.</item>
		<item name="AntiLoopSpawn" type="boolean" default="false">Safety flag used while selecting spawn points, to avoid infinite loops when no valid spawn can be found.</item>
		<item name="OfferingData" type="table">
			Data about the currently selected Offering, with the fields `CurrentOffering` (the Offering ID), `OfferingName`, <page>Offering#GasCanMod</page>, `Singularity`, `Duality` and `Satiation` (Offering-specific modifiers) and `ItemMod` (extra/fewer items to spawn).
		</item>
		<item name="SlasherData" type="table">
			Tracks who is playing, with the fields `AllSurvivors` and `AllSlashers` (all players loaded for the round, dead or alive) and `GameReadyToBegin`.
		</item>
		<item name="GameProgress" type="number" default="-1">
			How much fuel/batteries have been put into the generators, from `0` to `10`. `-1` means the round hasn't started tracking progress yet.
		</item>
		<item name="SurvivorData" type="table">
			Round-wide Survivor data, currently only `GasCanMod` (decremented when a Survivor picks a gas can as their starting item).
		</item>
		<item name="SlasherEntities" type="table" default="{}">A Slasher's unique per-round entities, such as Bababooey's clones.</item>
		<item name="ExposureSpawns" type="table" default="{}">Only used by the legacy map config test tool.</item>
		<item name="Items" type="table" default="{}">Entity indexes of items that have been spawned or dropped this round.</item>
		<item name="SlashersToBeSpawned" type="table" default="{}">Slashers still waiting to be spawned.</item>
		<item name="Slashers" type="table" default="{}">
			SteamID64-keyed table of the round's Slasher assignments, each entry having `SlasherID` and <page>SLASHER#GasCanMod</page> - see <page>SlashCo.SelectSlasher</page>.
		</item>
		<item name="GasCanCount" type="number" default="8">How many gas cans should be spawned this round.</item>
		<item name="ItemCount" type="number" default="6">How many items should be spawned this round.</item>
		<item name="roundOverToggle" type="boolean" default="false">Internal flag toggled once the round-over sequence has run.</item>
		<item name="HelicopterSpawnPosition" type="Vector" default="vector_origin">Where the helicopter spawns for the round's escape sequence.</item>
		<item name="HelicopterInitialSpawnPosition" type="Vector" default="vector_origin">The helicopter's spawn position before any adjustments.</item>
		<item name="HelicopterTargetPosition" type="Vector" default="vector_origin">Where the helicopter is currently flying towards.</item>
		<item name="HelicopterRescuedPlayers" type="table" default="{}">Players that have already boarded the escape helicopter.</item>
		<item name="EscapeHelicopterSummoned" type="boolean" default="false">Whether the escape helicopter has been summoned yet.</item>
		<item name="DistressBeaconUsed" type="boolean" default="false">Whether the distress beacon has already been used this round.</item>
		<item name="Helicopter" type="number">
			Entity index of the current round's helicopter, or `0` if none exists. This is a virtual field backed by `SlashCo.Helicopter`.
		</item>
	</fields>
</structure>