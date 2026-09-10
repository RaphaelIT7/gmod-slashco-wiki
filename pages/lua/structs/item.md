<title>Item</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.RegisterItem</page>.<br>
		An item file (`lua/slashco/item/*.lua`) builds a local `ITEM` table, sets fields/callbacks on it, then calls `SlashCo.RegisterItem(ITEM, "Name")`.<br>
		<note>
			Most callbacks below are looked up by name straight off the raw item table (`SlashCoItems[item].CallbackName`), not through a metatable, so only the exact names listed here are ever read by the framework.
		</note>
		<note>
			<page>Item#Screenspace</page>, <page>Item#PreDrawHalos</page>, <page>Item#Thirdperson</page>, <page>Item#OnFootstep</page>, <page>Item#CanBeSeen</page>, <page>Item#CanSeeFlashlights</page>, <page>Item#OnDie</page>, <page>Item#OnOwnerTakeDamage</page>, <page>Item#PreDropSecondary</page> and <page>Item#PrePickUpPrimary</page>/<page>Item#PrePickUpSecondary</page> are all resolved through dispatch functions that check the player's active effects first - see <page>Effect</page> for the equivalent fields on an effect table, which take priority over an item's when both define the same one.
		</note>
	</description>
	<fields>
		<item name="Model" type="string">
			Path to the item's world model.<br>
			Used as the default `model` for this item's own <code>ViewModel</code>/<code>WorldModel</code>/<code>WorldModelHolstered</code> tables, set on the physical pickup entity by `sc_baseitem`, shown in the item picker's preview panel, and readable off a secondary item via <page>Player:ItemValue</page> (e.g. by <page>SlashCo.CreateItem</page> calls made when a generator consumes a GasCan/Battery).
		</item>
		<item name="Name" type="string">
			The item's display/registration name.<br>
			Used as the fallback identifier by <page>SlashCo.RegisterItem</page> when its `name` argument is omitted (`name = name or table.Name`).
		</item>
		<item name="EntClass" type="string">
			Class name of the entity spawned when this item exists as a physical pickup in the world (via <page>SlashCo.CreateItem</page>).<br>
			Also used for the reverse lookup `SlashCo.GetItemByEntity`, and checked directly by some Slasher abilities via <page>Player:ItemValue</page> to detect a specific item (e.g. Princess/Sid checking for `"sc_baby"`/`"sc_cookie"`).
		</item>
		<item name="Price" type="number">
			How many Points the item costs in the lobby shop; deducted from the buyer's balance on purchase.<br>
			<note>
				Items without this field are skipped entirely by the item picker's selection list (`if not itemTbl.Price then continue end`) - setting `Price` is what makes an item choosable at all, even a secondary item that is never actually bought (e.g. `GasCan`/`Battery` set `Price = 0`).
			</note>
			Also readable through <page>Player:ItemValue</page> as a generic "does this player have any priced item" check (used by Slasher Tyler's ability).
		</item>
		<item name="CamPos" type="Vector">
			Camera offset used by the `DModelPanel` preview in the item picker UI (`DModelPanel:SetCamPos`).
		</item>
		<item name="IsSpawnable" type="boolean" default="false" optional>
			If `true`, the item is added to `SlashCo.SpawnableItems` at load time, allowing it to spawn randomly in the world.
		</item>
		<item name="IsSecondary" type="boolean" default="false" optional>
			If `true`, the item occupies the secondary ("item2") slot instead of the primary ("item") one.<br>
			Affects which slot <page>Player:SetItem</page> assigns it to, which slot is dropped/checked first by <page>SlashCo.DropItem</page>/<page>SlashCo.ItemPickUp</page>, and the color/styling of its box in the survivor HUD.
		</item>
		<item name="Unbreakable" type="boolean" optional>
			If `true`, marks the item so it is skipped when <page>SlashCo.DropItem</page> is called with `ignoreField = "Unbreakable"`.<br>
			`"Unbreakable"` isn't a hardcoded field name in `SlashCo.DropItem` itself, it's simply the string convention used by callers such as Slasher Tyler's ability (which drops/destroys whichever of a survivor's two items isn't marked this way) - only `Battery` currently sets it.
		</item>
		<item name="ViewModel" type="table" optional>
			Render definition for the item as shown in the survivor's own hands (first person). If unset, nothing is rendered in the survivor's hands for this item.
		</item>
		<item name="ViewModel.model" type="string">Model to render. Usually just `ITEM.Model`.</item>
		<item name="ViewModel.pos" type="Vector">Position offset from the view bone (`ValveBiped.Bip01_Spine4`, forced by the framework), relative to the bone's own angle.</item>
		<item name="ViewModel.angle" type="Angle">Angle offset applied on top of the bone's angle.</item>
		<item name="ViewModel.size" type="Vector">Per-axis render scale, applied as a matrix.</item>
		<item name="ViewModel.color" type="Color">Color modulation/blend applied while drawing the model.</item>
		<item name="ViewModel.material" type="string">Material override; use `""` to use the model's own materials.</item>
		<item name="ViewModel.skin" type="number" default="0" optional>Skin index to set on the model.</item>
		<item name="ViewModel.bodygroup" type="table" optional>Table of `[bodygroupID] = value` entries applied to the model.</item>
		<item name="ViewModel.surpresslightning" type="boolean" default="false" optional>If `true`, engine lighting is suppressed while this model is drawn (sic - matches the field name used in code).</item>
		<item name="WorldModel" type="table" optional>
			Render definition for the item as shown on the survivor's body (world/third person) while it is the currently equipped/active item. If unset, nothing is rendered in-hand in third person for this item.
		</item>
		<item name="WorldModel.holdtype" type="string">Hold type passed to `SWEP:SetHoldType` while this item is equipped (e.g. `"normal"`, `"slam"`, `"duel"`, `"passive"`).</item>
		<item name="WorldModel.bone" type="string">Name of the bone on the survivor model to attach to (looked up via `Player:LookupBone`).</item>
		<item name="WorldModel.model" type="string">Model to render. Usually just `ITEM.Model`.</item>
		<item name="WorldModel.pos" type="Vector">Position offset from the bone, relative to the bone's own angle.</item>
		<item name="WorldModel.angle" type="Angle">Angle offset applied on top of the bone's angle.</item>
		<item name="WorldModel.size" type="Vector">Per-axis render scale, applied as a matrix.</item>
		<item name="WorldModel.color" type="Color">Color modulation/blend applied while drawing the model.</item>
		<item name="WorldModel.material" type="string">Material override; use `""` to use the model's own materials.</item>
		<item name="WorldModel.skin" type="number" default="0" optional>Skin index to set on the model.</item>
		<item name="WorldModel.bodygroup" type="table" optional>Table of `[bodygroupID] = value` entries applied to the model.</item>
		<item name="WorldModel.surpresslightning" type="boolean" default="false" optional>If `true`, engine lighting is suppressed while this model is drawn.</item>
		<item name="WorldModelHolstered" type="table" optional>
			Render definition for the item as shown holstered on the survivor's body while the *other* slot is the one currently equipped/active. If unset, nothing is rendered holstered for this item.
		</item>
		<item name="WorldModelHolstered.bone" type="string">Name of the bone on the survivor model to attach to.</item>
		<item name="WorldModelHolstered.model" type="string">Model to render. Usually just `ITEM.Model`.</item>
		<item name="WorldModelHolstered.pos" type="Vector">Position offset from the bone, relative to the bone's own angle.</item>
		<item name="WorldModelHolstered.angle" type="Angle">Angle offset applied on top of the bone's angle.</item>
		<item name="WorldModelHolstered.size" type="Vector">Per-axis render scale, applied as a matrix.</item>
		<item name="WorldModelHolstered.color" type="Color">Color modulation/blend applied while drawing the model.</item>
		<item name="WorldModelHolstered.material" type="string">Material override; use `""` to use the model's own materials.</item>
		<item name="WorldModelHolstered.skin" type="number" default="0" optional>Skin index to set on the model.</item>
		<item name="WorldModelHolstered.bodygroup" type="table" optional>Table of `[bodygroupID] = value` entries applied to the model.</item>
		<item name="WorldModelHolstered.surpresslightning" type="boolean" default="false" optional>If `true`, engine lighting is suppressed while this model is drawn.</item>
		<item name="ToolTip" type="string" optional>
			Language key shown as an extra tooltip line under the item's name box in the survivor HUD, in addition to the normal use/drop hints.
		</item>
		<item name="Precache" type="function" optional>
			`function()`<br>
			Called by <page>SlashCo.PrecacheItem</page>, in addition to the automatic precaching of <page>Item#Model</page>. Use it to precache any extra models/sounds/materials this item needs.
		</item>
		<item name="MaxAllowed" type="function" optional>
			`function() -> number`<br>
			If defined, caps how many survivors may hold this item at once. Enforced both server-side when buying it in the lobby shop, and client-side in the item picker (which greys out selection once the cap is reached).
		</item>
		<item name="EquipSound" type="function" optional>
			`function() -> string`<br>
			If defined, called by <page>SlashCo.ChangeSurvivorItem</page> to get a sound path to play in place of the default random equip sound whenever this item is equipped.
		</item>
		<item name="OnBuy" type="function" optional>
			`function()`<br>
			Called server-side right after a survivor purchases and equips this item through the lobby shop.
		</item>
		<item name="DisplayColor" type="function" optional>
			`function(ply) -> r, g, b, a`<br>
			Called by the survivor HUD to get the background color of the item's name box, called on the item itself (not affected by active effects). Falls back to a default color per slot if unset or if it returns nothing.
		</item>
		<item name="ModifyRender" type="function" optional>
			`function(model, renderTable)`<br>
			Called client-side every render frame, right before the equipped item's <code>ViewModel</code>/<code>WorldModel</code>/<code>WorldModelHolstered</code> table is applied to the clientside model panel, letting the item tweak `renderTable` (or `model` directly) beforehand. Not currently used by any shipped item.
		</item>
		<item name="OnSetModel" type="function" optional>
			`function(model, renderTable)`<br>
			Called client-side whenever the rendered clientside model panel's actual model changes to the one set by `renderTable.model` (e.g. to reset its sequence). Not currently used by any shipped item besides `LabMeat`.
		</item>
		<item name="OnRenderHand" type="function" optional>
			`function(ply, modelPanel)`<br>
			Called client-side after this item's <code>ViewModel</code> has been rendered in the survivor's hands each frame. Not currently used by any shipped item.
		</item>
		<item name="OnRenderWorld" type="function" optional>
			`function(ply, modelPanel)`<br>
			Called client-side after this item's <code>WorldModel</code> has been rendered each frame while it is the active/equipped item. Not currently used by any shipped item.
		</item>
		<item name="OnRenderHolstered" type="function" optional>
			`function(ply, modelPanel)`<br>
			Called client-side after this item's <code>WorldModelHolstered</code> has been rendered each frame while it is holstered. Not currently used by any shipped item.
		</item>
		<item name="IsFuel" type="boolean" optional>
			Marks a secondary item as valid fuel for `sc_generator`; checked via <page>Player:ItemValue</page>`("IsFuel", false, true)`.
		</item>
		<item name="IsBattery" type="boolean" optional>
			Marks a secondary item as a valid battery for `sc_generator`; checked via <page>Player:ItemValue</page>`("IsBattery", false, true)`.
		</item>
		<item name="FuelSpeed" type="number" default="1" optional>
			Multiplier for how fast a generator fuels while this item is held; divides the generator's `DefaultTimeToFuel` (checked via <page>Player:ItemValue</page>/<page>Player:PerkValue</page>).
		</item>
		<item name="OnFuel" type="function" optional>
			`function(ply, generator)`<br>
			Dispatched via <page>Player:SecondaryItemFunction</page> (so an active effect's `OnFuel` would take priority) when this <page>Item#IsFuel</page> secondary item is poured into a `sc_generator`. Not currently used by any shipped item.
		</item>
		<item name="OnBattery" type="function" optional>
			`function(ply, generator)`<br>
			Dispatched the same way as <page>Item#OnFuel</page>, when this <page>Item#IsBattery</page> secondary item is installed into a `sc_generator`. Not currently used by any shipped item.
		</item>
		<item name="OnUse" type="function" optional>
			`function(ply) -> doNotRemove`<br>
			Called by <page>SlashCo.UseItem</page> when the survivor uses their held item (secondary slot takes priority). If it returns a truthy value the item stays equipped and an "item unusable" sound plays instead; otherwise the item is removed/consumed.
		</item>
		<item name="OnPickUp" type="function" optional>
			`function(ply)`<br>
			Called directly on the item (not through the effect-checked dispatch) right when it becomes newly equipped via <page>SlashCo.ChangeSurvivorItem</page>, whether from a world pickup or a lobby purchase.
		</item>
		<item name="OnSwitchFrom" type="function" optional>
			`function(ply)`<br>
			Called on an item right before its slot's value changes away from it - when it's dropped, replaced by picking up another item, or removed via `SlashCo.RemoveItem`.
		</item>
		<item name="PreDrop" type="function" optional>
			`function(ply) -> dontDrop`<br>
			Called on the item about to be dropped (secondary slot takes priority) at the very start of <page>SlashCo.DropItem</page>. Returning a truthy value cancels the drop entirely.
		</item>
		<item name="PreDropSecondary" type="function" optional>
			`function(ply, secondaryItem) -> dontDrop`<br>
			Declared on the *primary* item; dispatched via <page>Player:ItemFunction</page> (so an active <page>Effect#PreDropSecondary</page> takes priority) right before the secondary item is dropped, letting the primary item veto it. `secondaryItem` is the name of the item about to be dropped.
		</item>
		<item name="OnDrop" type="function" optional>
			`function(ply) -> height, dontDrop, dontPush`<br>
			Called on the item after its slot has already been cleared, right before its dropped world entity is created.<br>
			`height` (number, optional, default `60`): Z offset above the player to spawn the dropped entity at.<br>
			`dontDrop` (boolean, optional): if truthy, aborts creating the dropped entity (the slot has already been cleared by this point regardless).<br>
			`dontPush` (boolean, optional): if truthy, skips giving the dropped entity's physics object a push velocity/spin.
		</item>
		<item name="ItemDropped" type="function" optional>
			`function(ply, droppedEntity, phys)`<br>
			Called on the item right after its dropped world entity has been created (and, unless `dontPush` was set, launched).
		</item>
		<item name="PrePickUp" type="function" optional>
			`function(ply, itemindex) -> dontPickup`<br>
			Called on the item about to be picked up itself, via <page>SlashCo.ItemPickUp</page>. Returning a truthy value cancels the pickup.
		</item>
		<item name="PrePickUpPrimary" type="function" optional>
			`function(ply, item, itemindex) -> dontPickup`<br>
			Declared on a *secondary* item; dispatched via <page>Player:SecondaryItemFunction</page> right before a new primary item is picked up, letting the currently-held secondary item veto it. `item` is the name of the item about to be picked up.
		</item>
		<item name="PrePickUpSecondary" type="function" optional>
			`function(ply, item, itemindex) -> dontPickup`<br>
			Declared on a *primary* item; dispatched via <page>Player:ItemFunction</page> right before a new secondary item is picked up, letting the currently-held primary item veto it.
		</item>
		<item name="CanBeSeen" type="function" optional>
			`function(ply) -> visible`<br>
			Dispatched via <page>Player:ItemFunction</page> (active effects take priority) to override whether the survivor holding this item can currently be seen. Return `nil`/nothing to not override.
		</item>
		<item name="CanSeeFlashlights" type="function" optional>
			`function(ply) -> canSee`<br>
			Same dispatch as <page>Item#CanBeSeen</page>, but overrides whether the survivor holding this item can see other players' flashlights.
		</item>
		<item name="OnFootstep" type="function" optional>
			`function(ply) -> suppress`<br>
			Dispatched via <page>Player:ItemFunction</page>. If it returns a truthy value, this survivor's footstep sound (and the "step notice" visual the Slasher would otherwise perceive) is suppressed.
		</item>
		<item name="OnDie" type="function" optional>
			`function(ply) -> dontTickLife`<br>
			Dispatched via <page>Player:ItemFunction</page> when the survivor dies. Returning a truthy value skips the entire normal death sequence (dropping all items, losing a life, spawning a ragdoll, moving to spectator) so the item can implement custom handling instead, e.g. `DeathWard` reviving the survivor.
		</item>
		<item name="OnOwnerTakeDamage" type="function" optional>
			`function(ply, dmg) -> result`<br>
			Dispatched via <page>Player:ItemFunction</page> whenever the survivor holding this item takes damage. Can mutate `dmg` in place (e.g. `dmg:ScaleDamage(...)`). If it returns a non-`nil` value, that value is returned from the gamemode's `EntityTakeDamage` hook (returning `true` blocks the damage entirely).
		</item>
		<item name="Screenspace" type="function" optional>
			`function()`<br>
			Dispatched client-side via <page>Player:ItemFunction</page> every frame while the local survivor is alive, to draw custom post-processing/screen effects.
		</item>
		<item name="PreDrawHalos" type="function" optional>
			`function()`<br>
			Dispatched client-side via <page>Player:ItemFunction</page> while halos are being drawn for the local survivor. Not currently used by any shipped item.
		</item>
		<item name="Thirdperson" type="function" optional>
			`function() -> useThirdperson`<br>
			Dispatched via <page>Player:ItemFunction</page> from `CalcView`. If it returns a truthy value, the gamemode computes a custom third-person camera for the survivor; otherwise the default first-person view is used. Not currently used by any shipped item.
		</item>
	</fields>
</structure>
