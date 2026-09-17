<title>SLASHER</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.RegisterSlasher</page>.<br>
		Every playable Slasher (`lua/slashco/slasher/*.lua`) defines a local `SLASHER` table with these fields and callbacks and registers it at the end of the file.<br>
		<note>
			Besides the fields below, a Slasher may define any number of additional fields and functions of its own (e.g. `SidRage`, `ThirstyRage`) - those are purely internal to that Slasher and are only ever read by its own file through <page>Player:SlasherValue</page>/<page>Player:SlasherFunction</page>, never by the generic framework.
		</note>
	</description>
	<fields>
		<item name="Name" type="string">
			The Slasher's display name. Used as the default registration name in <page>SlashCo.RegisterSlasher</page>, shown in the lobby/picker UI, and used as a fallback for a <page>Document</page>'s `Name`.
		</item>
		<item name="Class" type="number">
			The Slasher's <page>SlashCo.SlasherClass</page>. Used to filter the slasher picker/lobby restrictions and by <page>SlashCo.GetRandomSlasher</page>.
		</item>
		<item name="DangerLevel" type="number">
			The Slasher's <page>DangerLevel</page>. Used to filter the slasher picker/lobby restrictions, by <page>SlashCo.GetRandomSlasher</page>, and to pick the danger announcement sound played when the round starts.
		</item>
		<item name="IsSelectable" type="boolean" default="false" optional>
			Whether this Slasher can be picked normally - by the slasher picker UI and by <page>SlashCo.GetRandomSlasher</page>. Set to `false` for internal/legacy entries that should never be spawned directly (e.g. Leuonard, which is additionally hardcoded to be excluded from `GetRandomSlasher`).
		</item>
		<item name="Model" type="string" default="models/Humans/Group01/male_07.mdl" optional>
			Path to the player model used while playing as this Slasher. Read by the `player_slasher_base` player class when setting the model, and precached automatically by `SlashCo.PrecacheSlasher`.
		</item>
		<item name="Aliases" type="table" default="{}" optional>
			A list of alternate name strings for the Slasher (e.g. nicknames used in-universe). Used as a fallback for a <page>Document</page>'s <page>Document#Aliases</page> field when the document doesn't define its own, translated through the language key `Alias_<name>`.
		</item>
		<item name="ProTip" type="string" optional>
			Language key for a short gameplay tip. Shown as the round's Slasher hint (`SlashCo.LobbyData.SelectedSlasherInfo.TIP`) when the Slasher is chosen automatically on the Easy difficulty.
		</item>
		<item name="SpeedRating" type="string" optional>
			A star-rating string (e.g. `"★★☆☆☆"`) shown in the slasher picker's description to indicate the Slasher's relative speed.<br>
			<note>
				Only required if <page>SLASHER#IsSelectable</page> is `true` - the picker concatenates this value directly into the description text, so a selectable Slasher without it will error when hovered.
			</note>
		</item>
		<item name="EyeRating" type="string" optional>
			A star-rating string (e.g. `"★★★☆☆"`) shown in the slasher picker's description to indicate the Slasher's relative eyesight/vision. Same requirement as <page>SLASHER#SpeedRating</page>.
		</item>
		<item name="DiffRating" type="string" optional>
			A star-rating string shown in the slasher picker's description to indicate the Slasher's relative difficulty to play. Same requirement as <page>SLASHER#SpeedRating</page>.
		</item>
		<item name="GasCanMod" type="number" default="0" realm="Server" optional>
			How many gas cans should be added or removed for the round because this Slasher is in play. Allowed to be negative. Summed across every spawned Slasher when calculating the round's gas can count, and copied onto `SlashCo.CurRound.Slashers[steamID64].GasCanMod` when the Slasher is selected.
		</item>
		<item name="ForceGasCanCount" type="number" default="0" realm="Server" optional>
			Summed (with a fallback of `0`) across every spawned Slasher alongside <page>SLASHER#GasCanMod</page>; if the combined total is `0` or greater, it overrides the round's computed gas can count entirely instead of just modifying it.
		</item>
		<item name="ItemToSpawn" type="string" realm="Server" optional>
			The ID of an <page>ITEM</page> that should always be spawned at an extra location for every round this Slasher is in (e.g. Sid spawns `"Cookie"`, Thirsty spawns `"MilkJug"`). Left unset, no extra forced item is spawned.
		</item>
		<item name="SpawnDelay" type="number" default="-1" realm="Server" optional>
			How many seconds into an Escape round this Slasher should spawn after, overriding the difficulty-based delay. `-1` means no override. If multiple Slashers are in the round, the smallest override wins.
		</item>
		<item name="ProwlSpeed" type="number" default="150" realm="Server" optional>
			Run/walk speed used while not chasing (outside of `InSlasherChaseMode`).
		</item>
		<item name="ChaseSpeed" type="number" realm="Server">
			Run/walk speed used while actively chasing a Survivor. Has no framework fallback, so every Slasher must set this.
		</item>
		<item name="Eyesight" type="number" realm="Server">
			Multiplied by `100` to get the field of view distance used by the per-tick chase-detection scan (<page>Player:FindPlayersInView</page>) and used to scale the Slasher's fog thickness (<page>SlashCo.AddFog</page>). Has no framework fallback, so every Slasher must set this.<br>
			<note>
				This is a separate mechanism from the networked, client-visible "eyesight" value returned by <page>Player:GetEyeSight</page> (which drives the slasher-vision screen brightness effect). By convention every Slasher pushes this field's value into that networked value itself, usually via `slasher:SetEyeSight(SLASHER.Eyesight)` inside its own <page>SLASHER#OnSpawn</page>/<page>SLASHER#OnTickBehaviour</page> - the generic framework does **not** copy it there automatically.
			</note>
		</item>
		<item name="Perception" type="number" realm="Server" optional>
			Not read by the generic framework directly. By convention every Slasher uses this field as the initial/base value it pushes into the networked <page>Player:GetPerception</page> value itself (usually via `slasher:SetPerception(SLASHER.Perception)` inside its own <page>SLASHER#OnSpawn</page>/<page>SLASHER#OnTickBehaviour</page>), which in turn is read generically by the framework (e.g. survivor footstep notice range, `sc_beerkeg`/`sc_activecrazyburger` stun duration).
		</item>
		<item name="ChaseRange" type="number" default="600 (chase-detection tick) / 1000 (SlashCo.StartChaseMode)" realm="Server" optional>
			Distance (in units) within which a Survivor can be spotted and put into chase. Two different fallbacks are used depending on which internal check reads it.
		</item>
		<item name="ChaseRadius" type="number" default="0.91" realm="Server" optional>
			Cosine of the cone angle used for the Slasher's field-of-view checks (`ents.FindInCone`) both for spotting and for maintaining a chase.
		</item>
		<item name="ChaseDuration" type="number" default="10" realm="Server" optional>
			How many seconds a Survivor can be out of sight before the chase ends. Also used to compute the hard failsafe timer for `SlashCo.StartChaseMode` (`ChaseDuration * 10 + 45` seconds).
		</item>
		<item name="ChaseCooldown" type="number" default="3" realm="Server" optional>
			How many seconds must pass after a chase ends before another one can start.
		</item>
		<item name="ChaseMusic" type="string" realm="Server">
			Sound path played (looping) while this Slasher is chasing. Precached automatically by `SlashCo.PrecacheSlasher` if set. Has no framework fallback when actually played, so every Slasher must set this.
		</item>
		<item name="KillDistance" type="number" default="135" realm="Server" optional>
			Maximum distance to a Survivor for `SlashCo.Jumpscare` to be allowed to trigger (ignored while the target is already being jumpscared).
		</item>
		<item name="KillSound" type="string" realm="Server">
			Sound path played when this Slasher jumpscares a Survivor. Precached automatically by `SlashCo.PrecacheSlasher` if set. Has no framework fallback when emitted, so every Slasher must set this.
		</item>
		<item name="KillDelay" type="number" default="3" realm="Server" optional>
			Seconds after a kill before this Slasher is allowed to jumpscare again.
		</item>
		<item name="JumpscareDuration" type="number" default="1.5" realm="Server" optional>
			How many seconds the jumpscare freeze/animation lasts before the Survivor actually dies.
		</item>
		<item name="AngerPassiveGain" type="number" default="0" realm="Server" optional>
			Anger gained automatically every second regardless of what the Slasher is doing, added on top of whatever <page>SLASHER#OnAngerTick</page> does.
		</item>
		<item name="CustomBackgroundMusic" type="boolean" default="false" realm="Server" optional>
			If `true` for any Slasher in the round, the automatic ambient/anger background music system is skipped entirely, letting the Slasher(s) manage their own background music.
		</item>
		<item name="HighAngerBackgroundMusic" type="string" realm="Server" optional>
			Sound path used as the round's background music while this Slasher's anger is above `75`.
		</item>
		<item name="MediumAngerBackgroundMusic" type="string" realm="Server" optional>
			Sound path used as the round's background music while this Slasher's anger is above `50` (and not above `75`).
		</item>
		<item name="LowAngerBackgroundMusic" type="string" realm="Server" optional>
			Sound path used as the round's background music while this Slasher's anger is above `25` (and not above `50`).
		</item>
		<item name="HelicopterArriveTime" type="number" default="-1" realm="Server" optional>
			Forces how many seconds after both generators are activated the escape helicopter arrives. `-1` means no override (a randomized default based on difficulty is used instead). If multiple Slashers are in the round, the smallest override wins.
		</item>
		<item name="DisableHelicopterMusic" type="boolean" default="false" realm="Server" optional>
			If `true` for any Slasher in the round, the special helicopter-arrival music is not played.
		</item>
		<item name="CannotBeSpectated" type="boolean" default="false" optional>
			If `true`, spectators cannot spectate this Slasher (it's excluded from `SlashCo.GetSpectatableSet`, from spectator right-click targeting, and clientside <page>SLASHER#CanBeSeen</page> always returns `false` for spectators looking at it).
		</item>
		<item name="OnBalanceForPlayers" type="function" realm="Server" optional>
			Called with `(totalSurvivors, additionalSurvivors)` - note that unlike the other callbacks this is called directly on the table (no `slasher` argument) - whenever the survivor count for the round is known: once when the Slasher spawns, and once for every already-spawned Slasher of this type whenever `SlashCo.RegisterSlasher` runs again (e.g. on a Lua refresh). Typically used to scale balance fields such as <page>SLASHER#ProwlSpeed</page> based on player count.
		</item>
		<item name="Precache" type="function" realm="Server" optional>
			Called with no arguments by `SlashCo.PrecacheSlasher` when a round selects this Slasher, in addition to the automatic precaching of <page>SLASHER#Model</page>, <page>SLASHER#ChaseMusic</page> and <page>SLASHER#KillSound</page>. Use it to precache any extra models/sounds/materials this Slasher needs.
		</item>
		<item name="OnSpawn" type="function" realm="Server" optional>
			Called with no extra arguments right after this Slasher's player entity spawns, once run/walk speed and anger have been initialized.
		</item>
		<item name="OnTickBehaviour" type="function" realm="Server" optional>
			Called with no extra arguments every server tick (as long as at least one generator exists), after the generic chase/spotting logic has run for this Slasher.
		</item>
		<item name="CanJumpscare" type="function" realm="Server" optional>
			Called with `(target)` right before `SlashCo.Jumpscare` would jumpscare `target`. Returning a truthy value cancels the jumpscare.
		</item>
		<item name="OnKillPlayer" type="function" realm="Server" optional>
			Called with `(target)` once a jumpscare kill finishes and this Slasher has unfrozen again.
		</item>
		<item name="OnAngerTick" type="function" realm="Server" optional>
			Called with no extra arguments once per second, alongside the automatic <page>SLASHER#AngerPassiveGain</page> gain.
		</item>
		<item name="OnPlayerDeath" type="function" realm="Server" optional>
			Called with `(victim)` on every registered Slasher whenever any player dies (hook `SlashCo:PlayerDeath`), not just this Slasher's own kills.
		</item>
		<item name="OnBeerKegExplode" type="function" realm="Server" optional>
			Called with `(beerkeg)` on every registered Slasher whenever any `sc_beerkeg` explodes.
		</item>
		<item name="OnHitByPocketSand" type="function" optional>
			Called with `(thrower)` when this Slasher is blinded by a `PocketSand` item thrown by `thrower`.
		</item>
		<item name="OnHitByTeslaCoil" type="function" optional>
			Called with no extra arguments when this Slasher gets caught in an active Tesla Coil's final stun burst.
		</item>
		<item name="OnHitByBeerKeg" type="function" optional>
			Called with no extra arguments when this Slasher is in range of an exploding beer keg, alongside the automatic `SlasherStunDeafen` call.
		</item>
		<item name="OnHelicopterSummon" type="function" realm="Server" optional>
			Called with no extra arguments on every registered Slasher once both generators are activated and the escape helicopter is summoned.
		</item>
		<item name="OnItemSpawn" type="function" realm="Server" optional>
			Called with `(itemCount)` (the round's updated `SlashCo.CurRound.ItemCount`) on every spawned Slasher after regular round items have been spawned, after <page>SLASHER#ItemToSpawn</page> (if set) has been placed.
		</item>
		<item name="PickUpAttempt" type="function" realm="Server" optional>
			Called with `(ent)` whenever this Slasher tries to pick up `ent` with the use key. Returning a non-`nil` value overrides whether the pickup is allowed; Slashers cannot pick anything up by default.
		</item>
		<item name="OnPrimaryFire" type="function" realm="Server" optional>
			Called with `(target, trace)` (lag-compensated eye trace result) when this Slasher left-clicks.
		</item>
		<item name="OnSecondaryFire" type="function" realm="Server" optional>
			Called with `(target, trace)` when this Slasher right-clicks.
		</item>
		<item name="OnMainAbilityFire" type="function" realm="Server" optional>
			Called with `(target, trace)` when this Slasher presses their main ability key.
		</item>
		<item name="OnSpecialAbilityFire" type="function" realm="Server" optional>
			Called with `(target, trace)` when this Slasher presses their special ability key.
		</item>
		<item name="Animator" type="function" optional>
			Called with `(velocity)` from the `CalcMainActivity` hook while this Slasher is playing. Return an activity to override the calculated main animation activity.
		</item>
		<item name="Footstep" type="function" optional>
			Called with no extra arguments from the `PlayerFootstep` hook while this Slasher is playing.
		</item>
		<item name="Move" type="function" optional>
			Called with `(mv)` (the `CMoveData`) from the `Move` hook while this Slasher is playing.
		</item>
		<item name="FinishMove" type="function" optional>
			Called with `(mv)` (the `CMoveData`) from the `FinishMove` hook while this Slasher is playing.
		</item>
		<item name="CanBeSeen" type="function" optional>
			Called with no extra arguments from <page>Player:CanBeSeen</page> while this Slasher's player entity is being checked. Returning a non-`nil` value overrides the default `Player:GetVisible` result.
		</item>
		<item name="CanSeeFlashlights" type="function" optional>
			Called with no extra arguments from `Player:CanSeeFlashlights` for this Slasher. Returning a non-`nil` value overrides the default result.
		</item>
		<item name="Visibility" type="function" optional>
			Called with `(target)` for every Survivor that <page>Player:FindPlayersInView</page> otherwise considers visible to this Slasher. Returning exactly `0` removes that Survivor from the result.
		</item>
		<item name="ClientSideEffect" type="function" realm="Client" optional>
			Called with no extra arguments every `Think` while the local player is this Slasher, alongside the slasher-vision dynamic light/particle effects.
		</item>
		<item name="PreDrawHalos" type="function" realm="Client" optional>
			Called with no extra arguments from the `PreDrawHalos` hook while the local player is this Slasher, after generator/clone halos have been drawn. Use it to add extra `halo.Add` highlights.
		</item>
		<item name="Thirdperson" type="function" realm="Client" optional>
			Called with no extra arguments every frame (`CalcView`) while the local player is this Slasher. Return a truthy value to build a custom third-person camera view this frame; otherwise the default first-person view is used.
		</item>
		<item name="ShouldPlayAmbientSound" type="function" realm="Server" optional>
			Called with no extra arguments before the random ambient sound system considers playing a sound near this Slasher. Must return a truthy value for the sound to play - Slashers that don't define this callback never get random ambient sounds.
		</item>
		<item name="InitHud" type="function" realm="Client" optional>
			Called with `(hudPanel)` (the `slashco_slasher_stockhud` panel) whenever the local player's Slasher HUD is (re)created. Use it together with <page>Player:SlasherHudFunc</page> to set up this Slasher's HUD controls/meters.
		</item>
		<item name="DrawHUD" type="function" realm="Client" optional>
			Called with `(hudPanel)` (the same panel passed to <page>SLASHER#InitHud</page>) every frame from the <page>SlashCo:DrawHUD</page> hook while the local player is playing as this Slasher. Use it to draw this Slasher's HUD.
		</item>
	</fields>
</structure>
