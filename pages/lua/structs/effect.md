<title>EFFECT</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.RegisterEffect</page>.<br>
		An effect file (`lua/slashco/effect/*.lua`) builds a local `EFFECT` table, sets fields/callbacks on it, then calls `SlashCo.RegisterEffect(EFFECT, "Name")`.<br>
		An effect is applied to a player via <page>Player:AddEffect</page> for a duration, and is much simpler than <page>ITEM</page> - most effect files only define `Name` plus a handful of the callbacks below.<br>
		<note>
			Like <page>ITEM</page>, these fields/callbacks are looked up by name straight off the raw effect table (`SlashCoEffects[effectName].CallbackName`), so only the exact names listed here are ever read by the framework.<br>
			See <page>ITEM</page> for the equivalent item-slot fields (<page>ITEM#Screenspace</page>, <page>ITEM#OnFootstep</page>, <page>ITEM#CanBeSeen</page>, <page>ITEM#CanSeeFlashlights</page>, <page>ITEM#OnDie</page>, <page>ITEM#OnOwnerTakeDamage</page>, <page>ITEM#PreDrawHalos</page>, <page>ITEM#Thirdperson</page>, <page>ITEM#PreDropSecondary</page>, <page>ITEM#PrePickUpPrimary</page>, <page>ITEM#PrePickUpSecondary</page>) that these mirror - whichever of the two defines one of these names, the active effect always wins.
		</note>
	</description>
	<fields>
		<item name="Name" type="string">
			The effect's display/registration name.<br>
			Used as the fallback identifier by <page>SlashCo.RegisterEffect</page> when its `name` argument is omitted (`name = name or table.Name`).
		</item>
		<item name="FuelSpeed" type="number" optional>
			Multiplier for how fast a generator fuels while this effect is active on the player; divides the generator's `DefaultTimeToFuel`.<br>
			Checked through <page>Player:ItemValue</page>/<page>Player:PerkValue</page>, which look at active effects before either item slot - so this overrides any <page>ITEM#FuelSpeed</page> set by a held item while the effect is active. Used by the `Buzzed`, `FuelSpeed`, `Balkan`/`BalkanTrip` and `BalkanTripWeak` effects.
		</item>
		<item name="OnApplied" type="function" optional>
			`function(ply)`<br>
			Called by <page>Player:AddEffect</page> right after the effect becomes active on the player (after any earlier expiry handling has already run).
		</item>
		<item name="OnExpired" type="function" optional>
			`function(ply)`<br>
			Called when the effect naturally times out and no other stacked instance of it remains active, or as the fallback used in place of <page>EFFECT#OnRemoved</page> when that isn't defined (whether the effect is re-applied while active, or explicitly cleared).
		</item>
		<item name="OnRemoved" type="function" optional>
			`function(ply)`<br>
			If defined, called instead of <page>EFFECT#OnExpired</page> whenever the effect is removed early - re-applied while already active (via <page>Player:AddEffect</page>), or explicitly cleared via <page>Player:ClearEffect</page>/<page>Player:ClearEffects</page>.
		</item>
		<item name="Screenspace" type="function" optional>
			`function()`<br>
			Dispatched client-side via <page>Player:ItemFunction</page> every frame while the local survivor is alive, to draw custom post-processing/screen effects. Takes priority over the equivalent field on either of the player's items. Used by almost every shipped effect (e.g. `Speed`, `Invisibility`, `Awareness`, `Dazed`).
		</item>
		<item name="OnFootstep" type="function" optional>
			`function(ply) -> suppress`<br>
			Dispatched via <page>Player:ItemFunction</page>, checked before the player's item. If it returns a truthy value, the player's footstep sound (and the "step notice" visual the Slasher would otherwise perceive) is suppressed. Used by `Invisibility`.
		</item>
		<item name="CanBeSeen" type="function" optional>
			`function(ply) -> visible`<br>
			Dispatched via <page>Player:ItemFunction</page>, checked before the player's item, to override whether the player can currently be seen. Used by `Invisibility` to return `false`.
		</item>
		<item name="OnOwnerTakeDamage" type="function" optional>
			`function(ply, dmg) -> result`<br>
			Dispatched via <page>Player:ItemFunction</page>, checked before the player's item, whenever the player takes damage. Can mutate `dmg` in place (e.g. `dmg:ScaleDamage(...)`); if it returns a non-`nil` value, that value is returned from the gamemode's `EntityTakeDamage` hook. Used by `Resistance` to scale incoming damage down.
		</item>
		<item name="CanSeeFlashlights" type="function" optional>
			`function(ply) -> canSee`<br>
			Same dispatch as <page>EFFECT#CanBeSeen</page>, overriding whether the player can see other players' flashlights. Not currently used by any shipped effect.
		</item>
		<item name="OnDie" type="function" optional>
			`function(ply) -> dontTickLife`<br>
			Dispatched via <page>Player:ItemFunction</page>, checked before the player's item, when the player dies. Returning a truthy value skips the entire normal death sequence, the same as the identical field on <page>ITEM</page>. Not currently used by any shipped effect.
		</item>
		<item name="PreDrawHalos" type="function" optional>
			`function()`<br>
			Dispatched client-side via <page>Player:ItemFunction</page> while halos are being drawn for the local survivor. Not currently used by any shipped effect.
		</item>
		<item name="Thirdperson" type="function" optional>
			`function() -> useThirdperson`<br>
			Dispatched via <page>Player:ItemFunction</page> from `CalcView`, checked before the player's item, to decide whether to use a custom third-person camera. Not currently used by any shipped effect.
		</item>
		<item name="PreDropSecondary" type="function" optional>
			`function(ply, secondaryItem) -> dontDrop`<br>
			Dispatched via <page>Player:ItemFunction</page>, checked before the player's primary item, right before the player's secondary item is dropped; returning a truthy value cancels the drop. Not currently used by any shipped effect.
		</item>
		<item name="PrePickUpPrimary" type="function" optional>
			`function(ply, item, itemindex) -> dontPickup`<br>
			Dispatched via <page>Player:SecondaryItemFunction</page>, checked before the player's secondary item, right before a new primary item is picked up; returning a truthy value cancels the pickup. Not currently used by any shipped effect.
		</item>
		<item name="PrePickUpSecondary" type="function" optional>
			`function(ply, item, itemindex) -> dontPickup`<br>
			Dispatched via <page>Player:ItemFunction</page>, checked before the player's primary item, right before a new secondary item is picked up; returning a truthy value cancels the pickup. Not currently used by any shipped effect.
		</item>
	</fields>
</structure>
